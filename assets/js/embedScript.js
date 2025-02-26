/**
 * Copyright 2023 Design Barn Inc.
 */


const baseUrl = "http://localhost/eco-system-report/assets/js/";



window.addEventListener("DOMContentLoaded", async () => {
  const animationData = await parseQueryVariables();  
  console.log(animationData)
  const pageBackground = getBackgroundColorAndTheme(animationData.bg_color);

  if (!animationData.file) {
    const contentDiv = document.getElementById("container");
    contentDiv.innerHTML = `<img src="https://static.lottiefiles.com/images/logo/lottiefiles-logo.svg" alt="LottieFiles" class="center" />`;
    console.error("Missing file parameter");
    return;
  }

  // Load Animation if file exists
  const player = document.querySelector("dotlottie-player");
  if (player) {
    player.load(animationData.file);
  } else {
    console.error("dotlottie-player not found in DOM.");
  }

  // Set page background color
  document.documentElement.style.backgroundColor = pageBackground.backgroundColor;
});

async function parseQueryVariables() {
  let data = {};
  const searchParams = new URLSearchParams(window.location.search);

console.log(searchParams);
const defaultFile = "ZruMNAesck.json"
  // Corrected query parameter key
  const file = searchParams.get("file") || defaultFile; // Expecting URL like ?file=ZruMNAesck.json
  if (!file) {
    console.error("File parameter missing in URL.");
    return { file: null };
  }

  const fileKey = file.split("/")[0];

  // Fetch metadata safely
  const metadata = await getAnimationMetadata(fileKey);

  data = {
    file: `${baseUrl}${file}`,
    ...metadata,
  };

  return data;
}

function getBackgroundColorAndTheme(color) {
  const data = { backgroundColor: "transparent", theme: "light" };

  if (!color) return data;

  if (color !== "#ffffff") {
    data.backgroundColor = hex2rgba(color);
    data.theme = lightOrDark(color) === "light" ? "light" : "dark";
  }

  return data;
}

function lightOrDark(color) {
  let r, g, b;

  if (color.match(/^rgb/)) {
    const match = color.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/);
    if (!match) return "light"; // Fallback in case of an invalid color

    r = parseInt(match[1]);
    g = parseInt(match[2]);
    b = parseInt(match[3]);
  } else {
    // Convert HEX to RGB
    const hex = color.slice(1).replace(color.length < 5 && /./g, "$&$&");
    const intVal = Number(`0x${hex}`);

    r = (intVal >> 16) & 255;
    g = (intVal >> 8) & 255;
    b = intVal & 255;
  }

  const hsp = Math.sqrt(0.299 * (r * r) + 0.587 * (g * g) + 0.114 * (b * b));
  return hsp > 127.5 ? "light" : "dark";
}

function hex2rgba(hex, alpha = 1) {
  const [r, g, b] = hex.match(/\w\w/g).map((x) => parseInt(x, 16));
  return `rgba(${r},${g},${b},${alpha})`;
}

async function getAnimationMetadata(fileKey) {
  const url = `${baseUrl}${fileKey}/metadata.json`;

  try {
    const res = await fetch(url);
    if (!res.ok) throw new Error(`HTTP error! Status: ${res.status}`);

    const data = await res.json();

    return {
      author_name: data.author || "Unknown",
      author_url: data.authorUrl || "#",
      bg_color: data.backgroundColor || "#ffffff",
    };
  } catch (error) {
    console.error(`Error fetching metadata: ${error}`);
    return { author_name: "Unknown", author_url: "#", bg_color: "#ffffff" };
  }
}
