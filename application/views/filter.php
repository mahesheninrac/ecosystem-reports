<style>
    .date-selection-wrapper {
        width: 100%;
        position: relative;
        line-height: 1.2;
    }

    .date-selection-wrapper .date-selection {
        width: 100%;
        outline: none;
        box-shadow: inset 3px 3px 6px var(--primary-200), inset -3px -3px 3px #fff;
        color: #071e54;
        opacity: 0.8;
        border-radius: 59px !important;
        border: 1px solid var(--primary-200);
        height: 33px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        cursor: pointer;
    }

    .date-selection-wrapper .DSDW {
        display: none;
        position: absolute;
        background: white;
        z-index: 9;
        border: 1px solid #eee;
        border-radius: 10px;
        margin-top: 7px;
        right: 0;
        width: 270px;
    }

    .date-selection-wrapper .DSDW.active {
        display: block
    }

    .date-selection-wrapper .DSDW .DSDW-header {
        padding: 5px 10px;
    }

    .date-selection-wrapper .DSDW .DSDW-header .date-fy-selection {
        background: transparent;
        border: 1px solid var(--darklight-200);
        padding: 4px 10px;
        width: 100%;
        border-radius: 6px;
        font-size: 12px;
    }

    .date-selection-wrapper .DSDW .DSDW-body {
        padding: 15px;
        border-top: 1px solid var(--darklight-200);
        border-bottom: 1px solid var(--darklight-200);
    }

    .date-selection-wrapper .DSDW .DSDW-footer {
        padding: 5px 10px;
    }

    .DSDW-footer button {
        font-size: 12px;
        border: none;
        padding: 5px;
        background: var(--primary-600);
        color: var(--darklight-100);
    }



    .date-selection-wrapper .DSDW .month-box-wrapper {
        list-style: none;
        display: flex;
        gap: 5px;
        flex-wrap: wrap;
        padding: 0;
        margin: 0;
    }

    .date-selection-wrapper .DSDW .month-box-wrapper .month-box {
        border-radius: 4px;
        padding: 5px;
        cursor: pointer;
        font-size: 11px;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        text-align: center;
        width: calc((100% / 6) - 5px);
        border: 1px solid white;
    }

    .date-selection-wrapper .DSDW .month-box-wrapper .month-box.active {
        border: 1px solid var(--primary-600);
        color: var(--darklight-100);
        background: var(--primary-600);
    }

    .date-selection-month {
        width: 100%;
        text-align: left;
        padding: 0 15px;
        line-height: 32px;
        font-size: 14px;
        color: var(--darklight-600);
    }

    .date-selection-year {
        width: 80px;
        border-left: 1px solid var(--primary-200);
        text-align: center;
        padding: 0 10px;
        line-height: 32px;
        font-size: 14px;
        background: var(--primary-600);
        color: var(--white-100);
    }
</style>

<div class="filter-container bg-darklight-100">
    <div class="container-fluid py-2">
        <div class="row" style="gap: 9px 0;">
            <div class="col-lg-3 col-xxl-3 col-md-6">
                <div class="input-group flex-nowrap align-items-center"><span class="input-img p-2">
                        <i class="icon-enin icon-By-Value text-primary-700 fs-20"></i>
                    </span>
                    <div class="input-group flex-nowrap align-items-center border py-1 form-box">
                        <label class="w-100 ps-2 fs-14 text-primary-800" for="value">By Value</label>
                        <div class="input-value-group pe-3">
                            <input class="form-check-input value" type="checkbox" id="value" value="value" name="value" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xxl-3 col-md-6">
                <div class="input-group flex-nowrap align-items-center"><span class="input-img p-2">
                        <i class="icon-enin icon-By-Value text-primary-700 fs-20"></i>
                    </span>
                    <div class="input-group flex-nowrap align-items-center border py-1 form-box">
                        <label class="w-100 ps-2 fs-14 text-primary-800" for="volume">By Volume</label>
                        <div class="input-value-group pe-3">
                            <input class="form-check-input volume" type="checkbox" value="volume" id="volume" name="volume">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-6 col-md-6">
                <div class="date-cont">
                    <div class="input-group flex-nowrap align-items-center"> <span class="input-img p-2">
                            <i class="icofont-calendar text-primary-700 fs-20"></i>
                        </span>
                        <input type="hidden" name="month" id="month" value="jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec">
                        <input type="hidden" name="year" id="year" value="2023">
                        <div class="date-selection-wrapper">
                            <div class="date-selection">
                                <span class="date-selection-month">Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec</span>
                                <span class="date-selection-year">2023</span>
                            </div>
                            <div class="DSDW">
                                <div class="DSDW-header">
                                    <select class="date-fy-selection">
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                                <div class="DSDW-body">
                                    <ul class="month-box-wrapper">
                                        <li class="month-box active" data-index="0" data-value="Jan">Jan</li>
                                        <li class="month-box active" data-index="1" data-value="Feb">Feb</li>
                                        <li class="month-box active" data-index="2" data-value="Mar">Mar</li>
                                        <li class="month-box active" data-index="3" data-value="Apr">Apr</li>
                                        <li class="month-box active" data-index="4" data-value="May">May</li>
                                        <li class="month-box active" data-index="5" data-value="Jun">Jun</li>
                                        <li class="month-box active" data-index="6" data-value="Jul">Jul</li>
                                        <li class="month-box active" data-index="7" data-value="Aug">Aug</li>
                                        <li class="month-box active" data-index="8" data-value="Sep">Sep</li>
                                        <li class="month-box active" data-index="9" data-value="Oct">Oct</li>
                                        <li class="month-box active" data-index="10" data-value="Nov">Nov</li>
                                        <li class="month-box active" data-index="11" data-value="Dec">Dec</li>
                                    </ul>
                                </div>
                                <div class="DSDW-footer">
                                    <button class="apply">Apply</button>
                                    <button class="cancel">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xxl-3 col-md-6">
                <div class="input-group flex-nowrap align-items-center"><span class="input-img p-2">
                        <i class="icon-enin icon-by-region text-primary-700 fs-20"></i>
                    </span>
                    <i class="select-dropdown-icon icofont-caret-down"></i>
                    <select name="region" id="region" class="form-box form-control fs-14 text-primary-400 bg-transparent rounded-0 region">
                        <option value="">All Region</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-xxl-3 col-md-6">
                <div class="input-group flex-nowrap align-items-center"><span class="input-img p-2">
                        <i class="icon-enin icon-by-state text-primary-700 fs-20"></i>
                    </span>
                    <i class="select-dropdown-icon icofont-caret-down"></i>
                    <select name="state" id="state" class="form-box form-control fs-14 text-primary-400 bg-transparent rounded-0 state">
                        <option value="">All State</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-xxl-3 col-md-6">
                <div class="input-group flex-nowrap align-items-center"><span class="input-img p-2">
                        <i class="icon-enin icon-by-category text-primary-700 fs-20"></i>
                    </span>
                    <i class="select-dropdown-icon icofont-caret-down"></i>
                    <select name="category" id="category" class="form-box form-control fs-14 text-primary-400 bg-transparent rounded-0 category">
                        <option value="">All Category</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-xxl-3 col-md-6">
                <div class="input-group flex-nowrap align-items-center"><span class="input-img p-2">
                        <i class="icon-enin icon-by-brand text-primary-700 fs-20"></i>
                    </span>
                    <i class="select-dropdown-icon icofont-caret-down"></i>
                    <select name="brand" id="brand" class="form-box form-control fs-14 text-primary-400 bg-transparent rounded-0 brand">
                        <option value="">All Brand</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>