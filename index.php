<?php
require_once 'feature/check_auth.php';
require_once 'partials/header.php';
require_once 'partials/sidebar.php';



?>

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <?php require_once 'partials/navbar.php'; ?>



            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">Tableau de bord</span>
                    </h4>


                    <div class="row">
                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                            <p class="mb-4">
                                                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                                your profile.
                                            </p>

                                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Profit</span>
                                            <h3 class="card-title mb-2">$12,628</h3>
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span>Sales</span>
                                            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Revenue -->
                        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                            <div class="card">
                                <div class="row row-bordered g-0">
                                    <div class="col-md-8">
                                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                                            <div id="apexchartsjbr64qiii" class="apexcharts-canvas apexchartsjbr64qiii apexcharts-theme-light" style="width: 398px; height: 300px;"><svg id="SvgjsSvg1571" width="398" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="398" height="300">
                                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                                            <div class="apexcharts-legend-series" rel="1" seriesname="2021" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="2021" data:collapsed="false" style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span></div>
                                                            <div class="apexcharts-legend-series" rel="2" seriesname="2020" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="2020" data:collapsed="false" style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span></div>
                                                        </div>
                                                        <style type="text/css">
                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: inline-block;
                                                                cursor: pointer;
                                                                margin-right: 3px;
                                                                border-style: solid;
                                                            }

                                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                                display: inline-block;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <g id="SvgjsG1573" class="apexcharts-inner apexcharts-graphical" transform="translate(53.89241600036621, 51)">
                                                        <defs id="SvgjsDefs1572">
                                                            <linearGradient id="SvgjsLinearGradient1577" x1="0" y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1578" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                                <stop id="SvgjsStop1579" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                                <stop id="SvgjsStop1580" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            </linearGradient>
                                                            <clipPath id="gridRectMaskjbr64qiii">
                                                                <rect id="SvgjsRect1582" width="334.1075839996338" height="224.269332818985" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskjbr64qiii"></clipPath>
                                                            <clipPath id="nonForecastMaskjbr64qiii"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskjbr64qiii">
                                                                <rect id="SvgjsRect1583" width="328.1075839996338" height="222.269332818985" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <rect id="SvgjsRect1581" width="22.224520045689175" height="218.269332818985" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1577)" class="apexcharts-xcrosshairs" y2="218.269332818985" filter="none" fill-opacity="0.9"></rect>
                                                        <g id="SvgjsG1603" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1604" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1606" font-family="Helvetica, Arial, sans-serif" x="23.150541714259557" y="247.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1607">Jan</tspan>
                                                                    <title>Jan</title>
                                                                </text><text id="SvgjsText1609" font-family="Helvetica, Arial, sans-serif" x="69.45162514277867" y="247.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1610">Feb</tspan>
                                                                    <title>Feb</title>
                                                                </text><text id="SvgjsText1612" font-family="Helvetica, Arial, sans-serif" x="115.75270857129777" y="247.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1613">Mar</tspan>
                                                                    <title>Mar</title>
                                                                </text><text id="SvgjsText1615" font-family="Helvetica, Arial, sans-serif" x="162.0537919998169" y="247.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1616">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text id="SvgjsText1618" font-family="Helvetica, Arial, sans-serif" x="208.35487542833602" y="247.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1619">May</tspan>
                                                                    <title>May</title>
                                                                </text><text id="SvgjsText1621" font-family="Helvetica, Arial, sans-serif" x="254.6559588568551" y="247.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1622">Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text><text id="SvgjsText1624" font-family="Helvetica, Arial, sans-serif" x="300.95704228537426" y="247.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1625">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG1640" class="apexcharts-grid">
                                                            <g id="SvgjsG1641" class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine1643" x1="0" y1="0" x2="324.1075839996338" y2="0" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1644" x1="0" y1="43.653866563796996" x2="324.1075839996338" y2="43.653866563796996" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1645" x1="0" y1="87.30773312759399" x2="324.1075839996338" y2="87.30773312759399" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1646" x1="0" y1="130.96159969139097" x2="324.1075839996338" y2="130.96159969139097" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1647" x1="0" y1="174.61546625518798" x2="324.1075839996338" y2="174.61546625518798" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1648" x1="0" y1="218.269332818985" x2="324.1075839996338" y2="218.269332818985" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1642" class="apexcharts-gridlines-vertical"></g>
                                                            <line id="SvgjsLine1650" x1="0" y1="218.269332818985" x2="324.1075839996338" y2="218.269332818985" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1649" x1="0" y1="1" x2="0" y2="218.269332818985" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1584" class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g id="SvgjsG1585" class="apexcharts-series" seriesName="2021" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1587" d="M 12.03828169141497 120.961599691391L 12.03828169141497 62.384639876556406Q 12.03828169141497 52.384639876556406 22.03828169141497 52.384639876556406L 18.26280173710414 52.384639876556406Q 28.26280173710414 52.384639876556406 28.26280173710414 62.384639876556406L 28.26280173710414 62.384639876556406L 28.26280173710414 120.961599691391Q 28.26280173710414 130.961599691391 18.26280173710414 130.961599691391L 22.03828169141497 130.961599691391Q 12.03828169141497 130.961599691391 12.03828169141497 120.961599691391z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 12.03828169141497 120.961599691391L 12.03828169141497 62.384639876556406Q 12.03828169141497 52.384639876556406 22.03828169141497 52.384639876556406L 18.26280173710414 52.384639876556406Q 28.26280173710414 52.384639876556406 28.26280173710414 62.384639876556406L 28.26280173710414 62.384639876556406L 28.26280173710414 120.961599691391Q 28.26280173710414 130.961599691391 18.26280173710414 130.961599691391L 22.03828169141497 130.961599691391Q 12.03828169141497 130.961599691391 12.03828169141497 120.961599691391z" pathFrom="M 12.03828169141497 120.961599691391L 12.03828169141497 120.961599691391L 28.26280173710414 120.961599691391L 28.26280173710414 120.961599691391L 28.26280173710414 120.961599691391L 28.26280173710414 120.961599691391L 28.26280173710414 120.961599691391L 12.03828169141497 120.961599691391" cy="52.384639876556406" cx="55.33936511993409" j="0" val="18" barHeight="78.5769598148346" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1588" d="M 58.33936511993409 120.961599691391L 58.33936511993409 110.4038930967331Q 58.33936511993409 100.4038930967331 68.33936511993409 100.4038930967331L 64.56388516562326 100.4038930967331Q 74.56388516562326 100.4038930967331 74.56388516562326 110.4038930967331L 74.56388516562326 110.4038930967331L 74.56388516562326 120.961599691391Q 74.56388516562326 130.961599691391 64.56388516562326 130.961599691391L 68.33936511993409 130.961599691391Q 58.33936511993409 130.961599691391 58.33936511993409 120.961599691391z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 58.33936511993409 120.961599691391L 58.33936511993409 110.4038930967331Q 58.33936511993409 100.4038930967331 68.33936511993409 100.4038930967331L 64.56388516562326 100.4038930967331Q 74.56388516562326 100.4038930967331 74.56388516562326 110.4038930967331L 74.56388516562326 110.4038930967331L 74.56388516562326 120.961599691391Q 74.56388516562326 130.961599691391 64.56388516562326 130.961599691391L 68.33936511993409 130.961599691391Q 58.33936511993409 130.961599691391 58.33936511993409 120.961599691391z" pathFrom="M 58.33936511993409 120.961599691391L 58.33936511993409 120.961599691391L 74.56388516562326 120.961599691391L 74.56388516562326 120.961599691391L 74.56388516562326 120.961599691391L 74.56388516562326 120.961599691391L 74.56388516562326 120.961599691391L 58.33936511993409 120.961599691391" cy="100.4038930967331" cx="101.64044854845321" j="1" val="7" barHeight="30.557706594657898" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1589" d="M 104.64044854845321 120.961599691391L 104.64044854845321 75.4807998456955Q 104.64044854845321 65.4807998456955 114.64044854845321 65.4807998456955L 110.86496859414238 65.4807998456955Q 120.86496859414238 65.4807998456955 120.86496859414238 75.4807998456955L 120.86496859414238 75.4807998456955L 120.86496859414238 120.961599691391Q 120.86496859414238 130.961599691391 110.86496859414238 130.961599691391L 114.64044854845321 130.961599691391Q 104.64044854845321 130.961599691391 104.64044854845321 120.961599691391z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 104.64044854845321 120.961599691391L 104.64044854845321 75.4807998456955Q 104.64044854845321 65.4807998456955 114.64044854845321 65.4807998456955L 110.86496859414238 65.4807998456955Q 120.86496859414238 65.4807998456955 120.86496859414238 75.4807998456955L 120.86496859414238 75.4807998456955L 120.86496859414238 120.961599691391Q 120.86496859414238 130.961599691391 110.86496859414238 130.961599691391L 114.64044854845321 130.961599691391Q 104.64044854845321 130.961599691391 104.64044854845321 120.961599691391z" pathFrom="M 104.64044854845321 120.961599691391L 104.64044854845321 120.961599691391L 120.86496859414238 120.961599691391L 120.86496859414238 120.961599691391L 120.86496859414238 120.961599691391L 120.86496859414238 120.961599691391L 120.86496859414238 120.961599691391L 104.64044854845321 120.961599691391" cy="65.4807998456955" cx="147.94153197697233" j="2" val="15" barHeight="65.4807998456955" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1590" d="M 150.94153197697233 120.961599691391L 150.94153197697233 14.365386656379712Q 150.94153197697233 4.365386656379712 160.94153197697233 4.365386656379712L 157.16605202266152 4.365386656379712Q 167.16605202266152 4.365386656379712 167.16605202266152 14.365386656379712L 167.16605202266152 14.365386656379712L 167.16605202266152 120.961599691391Q 167.16605202266152 130.961599691391 157.16605202266152 130.961599691391L 160.94153197697233 130.961599691391Q 150.94153197697233 130.961599691391 150.94153197697233 120.961599691391z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 150.94153197697233 120.961599691391L 150.94153197697233 14.365386656379712Q 150.94153197697233 4.365386656379712 160.94153197697233 4.365386656379712L 157.16605202266152 4.365386656379712Q 167.16605202266152 4.365386656379712 167.16605202266152 14.365386656379712L 167.16605202266152 14.365386656379712L 167.16605202266152 120.961599691391Q 167.16605202266152 130.961599691391 157.16605202266152 130.961599691391L 160.94153197697233 130.961599691391Q 150.94153197697233 130.961599691391 150.94153197697233 120.961599691391z" pathFrom="M 150.94153197697233 120.961599691391L 150.94153197697233 120.961599691391L 167.16605202266152 120.961599691391L 167.16605202266152 120.961599691391L 167.16605202266152 120.961599691391L 167.16605202266152 120.961599691391L 167.16605202266152 120.961599691391L 150.94153197697233 120.961599691391" cy="4.365386656379712" cx="194.24261540549145" j="3" val="29" barHeight="126.59621303501129" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1591" d="M 197.24261540549145 120.961599691391L 197.24261540549145 62.384639876556406Q 197.24261540549145 52.384639876556406 207.24261540549145 52.384639876556406L 203.46713545118064 52.384639876556406Q 213.46713545118064 52.384639876556406 213.46713545118064 62.384639876556406L 213.46713545118064 62.384639876556406L 213.46713545118064 120.961599691391Q 213.46713545118064 130.961599691391 203.46713545118064 130.961599691391L 207.24261540549145 130.961599691391Q 197.24261540549145 130.961599691391 197.24261540549145 120.961599691391z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 197.24261540549145 120.961599691391L 197.24261540549145 62.384639876556406Q 197.24261540549145 52.384639876556406 207.24261540549145 52.384639876556406L 203.46713545118064 52.384639876556406Q 213.46713545118064 52.384639876556406 213.46713545118064 62.384639876556406L 213.46713545118064 62.384639876556406L 213.46713545118064 120.961599691391Q 213.46713545118064 130.961599691391 203.46713545118064 130.961599691391L 207.24261540549145 130.961599691391Q 197.24261540549145 130.961599691391 197.24261540549145 120.961599691391z" pathFrom="M 197.24261540549145 120.961599691391L 197.24261540549145 120.961599691391L 213.46713545118064 120.961599691391L 213.46713545118064 120.961599691391L 213.46713545118064 120.961599691391L 213.46713545118064 120.961599691391L 213.46713545118064 120.961599691391L 197.24261540549145 120.961599691391" cy="52.384639876556406" cx="240.54369883401057" j="4" val="18" barHeight="78.5769598148346" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1592" d="M 243.54369883401057 120.961599691391L 243.54369883401057 88.5769598148346Q 243.54369883401057 78.5769598148346 253.54369883401057 78.5769598148346L 249.76821887969976 78.5769598148346Q 259.76821887969976 78.5769598148346 259.76821887969976 88.5769598148346L 259.76821887969976 88.5769598148346L 259.76821887969976 120.961599691391Q 259.76821887969976 130.961599691391 249.76821887969976 130.961599691391L 253.54369883401057 130.961599691391Q 243.54369883401057 130.961599691391 243.54369883401057 120.961599691391z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 243.54369883401057 120.961599691391L 243.54369883401057 88.5769598148346Q 243.54369883401057 78.5769598148346 253.54369883401057 78.5769598148346L 249.76821887969976 78.5769598148346Q 259.76821887969976 78.5769598148346 259.76821887969976 88.5769598148346L 259.76821887969976 88.5769598148346L 259.76821887969976 120.961599691391Q 259.76821887969976 130.961599691391 249.76821887969976 130.961599691391L 253.54369883401057 130.961599691391Q 243.54369883401057 130.961599691391 243.54369883401057 120.961599691391z" pathFrom="M 243.54369883401057 120.961599691391L 243.54369883401057 120.961599691391L 259.76821887969976 120.961599691391L 259.76821887969976 120.961599691391L 259.76821887969976 120.961599691391L 259.76821887969976 120.961599691391L 259.76821887969976 120.961599691391L 243.54369883401057 120.961599691391" cy="78.5769598148346" cx="286.8447822625297" j="5" val="12" barHeight="52.3846398765564" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1593" d="M 289.8447822625297 120.961599691391L 289.8447822625297 101.6731197839737Q 289.8447822625297 91.6731197839737 299.8447822625297 91.6731197839737L 296.0693023082189 91.6731197839737Q 306.0693023082189 91.6731197839737 306.0693023082189 101.6731197839737L 306.0693023082189 101.6731197839737L 306.0693023082189 120.961599691391Q 306.0693023082189 130.961599691391 296.0693023082189 130.961599691391L 299.8447822625297 130.961599691391Q 289.8447822625297 130.961599691391 289.8447822625297 120.961599691391z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 289.8447822625297 120.961599691391L 289.8447822625297 101.6731197839737Q 289.8447822625297 91.6731197839737 299.8447822625297 91.6731197839737L 296.0693023082189 91.6731197839737Q 306.0693023082189 91.6731197839737 306.0693023082189 101.6731197839737L 306.0693023082189 101.6731197839737L 306.0693023082189 120.961599691391Q 306.0693023082189 130.961599691391 296.0693023082189 130.961599691391L 299.8447822625297 130.961599691391Q 289.8447822625297 130.961599691391 289.8447822625297 120.961599691391z" pathFrom="M 289.8447822625297 120.961599691391L 289.8447822625297 120.961599691391L 306.0693023082189 120.961599691391L 306.0693023082189 120.961599691391L 306.0693023082189 120.961599691391L 306.0693023082189 120.961599691391L 306.0693023082189 120.961599691391L 289.8447822625297 120.961599691391" cy="91.6731197839737" cx="333.1458656910488" j="6" val="9" barHeight="39.2884799074173" barWidth="22.224520045689175"></path>
                                                            </g>
                                                            <g id="SvgjsG1594" class="apexcharts-series" seriesName="2020" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1596" d="M 12.03828169141497 150.961599691391L 12.03828169141497 187.7116262243271Q 12.03828169141497 197.7116262243271 22.03828169141497 197.7116262243271L 18.26280173710414 197.7116262243271Q 28.26280173710414 197.7116262243271 28.26280173710414 187.7116262243271L 28.26280173710414 187.7116262243271L 28.26280173710414 150.961599691391Q 28.26280173710414 140.961599691391 18.26280173710414 140.961599691391L 22.03828169141497 140.961599691391Q 12.03828169141497 140.961599691391 12.03828169141497 150.961599691391z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 12.03828169141497 150.961599691391L 12.03828169141497 187.7116262243271Q 12.03828169141497 197.7116262243271 22.03828169141497 197.7116262243271L 18.26280173710414 197.7116262243271Q 28.26280173710414 197.7116262243271 28.26280173710414 187.7116262243271L 28.26280173710414 187.7116262243271L 28.26280173710414 150.961599691391Q 28.26280173710414 140.961599691391 18.26280173710414 140.961599691391L 22.03828169141497 140.961599691391Q 12.03828169141497 140.961599691391 12.03828169141497 150.961599691391z" pathFrom="M 12.03828169141497 150.961599691391L 12.03828169141497 150.961599691391L 28.26280173710414 150.961599691391L 28.26280173710414 150.961599691391L 28.26280173710414 150.961599691391L 28.26280173710414 150.961599691391L 28.26280173710414 150.961599691391L 12.03828169141497 150.961599691391" cy="177.7116262243271" cx="55.33936511993409" j="0" val="-13" barHeight="-56.7500265329361" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1597" d="M 58.33936511993409 150.961599691391L 58.33936511993409 209.5385595062256Q 58.33936511993409 219.5385595062256 68.33936511993409 219.5385595062256L 64.56388516562326 219.5385595062256Q 74.56388516562326 219.5385595062256 74.56388516562326 209.5385595062256L 74.56388516562326 209.5385595062256L 74.56388516562326 150.961599691391Q 74.56388516562326 140.961599691391 64.56388516562326 140.961599691391L 68.33936511993409 140.961599691391Q 58.33936511993409 140.961599691391 58.33936511993409 150.961599691391z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 58.33936511993409 150.961599691391L 58.33936511993409 209.5385595062256Q 58.33936511993409 219.5385595062256 68.33936511993409 219.5385595062256L 64.56388516562326 219.5385595062256Q 74.56388516562326 219.5385595062256 74.56388516562326 209.5385595062256L 74.56388516562326 209.5385595062256L 74.56388516562326 150.961599691391Q 74.56388516562326 140.961599691391 64.56388516562326 140.961599691391L 68.33936511993409 140.961599691391Q 58.33936511993409 140.961599691391 58.33936511993409 150.961599691391z" pathFrom="M 58.33936511993409 150.961599691391L 58.33936511993409 150.961599691391L 74.56388516562326 150.961599691391L 74.56388516562326 150.961599691391L 74.56388516562326 150.961599691391L 74.56388516562326 150.961599691391L 74.56388516562326 150.961599691391L 58.33936511993409 150.961599691391" cy="199.5385595062256" cx="101.64044854845321" j="1" val="-18" barHeight="-78.5769598148346" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1598" d="M 104.64044854845321 150.961599691391L 104.64044854845321 170.2500795988083Q 104.64044854845321 180.2500795988083 114.64044854845321 180.2500795988083L 110.86496859414238 180.2500795988083Q 120.86496859414238 180.2500795988083 120.86496859414238 170.2500795988083L 120.86496859414238 170.2500795988083L 120.86496859414238 150.961599691391Q 120.86496859414238 140.961599691391 110.86496859414238 140.961599691391L 114.64044854845321 140.961599691391Q 104.64044854845321 140.961599691391 104.64044854845321 150.961599691391z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 104.64044854845321 150.961599691391L 104.64044854845321 170.2500795988083Q 104.64044854845321 180.2500795988083 114.64044854845321 180.2500795988083L 110.86496859414238 180.2500795988083Q 120.86496859414238 180.2500795988083 120.86496859414238 170.2500795988083L 120.86496859414238 170.2500795988083L 120.86496859414238 150.961599691391Q 120.86496859414238 140.961599691391 110.86496859414238 140.961599691391L 114.64044854845321 140.961599691391Q 104.64044854845321 140.961599691391 104.64044854845321 150.961599691391z" pathFrom="M 104.64044854845321 150.961599691391L 104.64044854845321 150.961599691391L 120.86496859414238 150.961599691391L 120.86496859414238 150.961599691391L 120.86496859414238 150.961599691391L 120.86496859414238 150.961599691391L 120.86496859414238 150.961599691391L 104.64044854845321 150.961599691391" cy="160.2500795988083" cx="147.94153197697233" j="2" val="-9" barHeight="-39.2884799074173" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1599" d="M 150.94153197697233 150.961599691391L 150.94153197697233 192.0770128807068Q 150.94153197697233 202.0770128807068 160.94153197697233 202.0770128807068L 157.16605202266152 202.0770128807068Q 167.16605202266152 202.0770128807068 167.16605202266152 192.0770128807068L 167.16605202266152 192.0770128807068L 167.16605202266152 150.961599691391Q 167.16605202266152 140.961599691391 157.16605202266152 140.961599691391L 160.94153197697233 140.961599691391Q 150.94153197697233 140.961599691391 150.94153197697233 150.961599691391z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 150.94153197697233 150.961599691391L 150.94153197697233 192.0770128807068Q 150.94153197697233 202.0770128807068 160.94153197697233 202.0770128807068L 157.16605202266152 202.0770128807068Q 167.16605202266152 202.0770128807068 167.16605202266152 192.0770128807068L 167.16605202266152 192.0770128807068L 167.16605202266152 150.961599691391Q 167.16605202266152 140.961599691391 157.16605202266152 140.961599691391L 160.94153197697233 140.961599691391Q 150.94153197697233 140.961599691391 150.94153197697233 150.961599691391z" pathFrom="M 150.94153197697233 150.961599691391L 150.94153197697233 150.961599691391L 167.16605202266152 150.961599691391L 167.16605202266152 150.961599691391L 167.16605202266152 150.961599691391L 167.16605202266152 150.961599691391L 167.16605202266152 150.961599691391L 150.94153197697233 150.961599691391" cy="182.0770128807068" cx="194.24261540549145" j="3" val="-14" barHeight="-61.115413189315795" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1600" d="M 197.24261540549145 150.961599691391L 197.24261540549145 152.7885329732895Q 197.24261540549145 162.7885329732895 207.24261540549145 162.7885329732895L 203.46713545118064 162.7885329732895Q 213.46713545118064 162.7885329732895 213.46713545118064 152.7885329732895L 213.46713545118064 152.7885329732895L 213.46713545118064 150.961599691391Q 213.46713545118064 140.961599691391 203.46713545118064 140.961599691391L 207.24261540549145 140.961599691391Q 197.24261540549145 140.961599691391 197.24261540549145 150.961599691391z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 197.24261540549145 150.961599691391L 197.24261540549145 152.7885329732895Q 197.24261540549145 162.7885329732895 207.24261540549145 162.7885329732895L 203.46713545118064 162.7885329732895Q 213.46713545118064 162.7885329732895 213.46713545118064 152.7885329732895L 213.46713545118064 152.7885329732895L 213.46713545118064 150.961599691391Q 213.46713545118064 140.961599691391 203.46713545118064 140.961599691391L 207.24261540549145 140.961599691391Q 197.24261540549145 140.961599691391 197.24261540549145 150.961599691391z" pathFrom="M 197.24261540549145 150.961599691391L 197.24261540549145 150.961599691391L 213.46713545118064 150.961599691391L 213.46713545118064 150.961599691391L 213.46713545118064 150.961599691391L 213.46713545118064 150.961599691391L 213.46713545118064 150.961599691391L 197.24261540549145 150.961599691391" cy="142.7885329732895" cx="240.54369883401057" j="4" val="-5" barHeight="-21.826933281898498" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1601" d="M 243.54369883401057 150.961599691391L 243.54369883401057 205.1731728498459Q 243.54369883401057 215.1731728498459 253.54369883401057 215.1731728498459L 249.76821887969976 215.1731728498459Q 259.76821887969976 215.1731728498459 259.76821887969976 205.1731728498459L 259.76821887969976 205.1731728498459L 259.76821887969976 150.961599691391Q 259.76821887969976 140.961599691391 249.76821887969976 140.961599691391L 253.54369883401057 140.961599691391Q 243.54369883401057 140.961599691391 243.54369883401057 150.961599691391z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 243.54369883401057 150.961599691391L 243.54369883401057 205.1731728498459Q 243.54369883401057 215.1731728498459 253.54369883401057 215.1731728498459L 249.76821887969976 215.1731728498459Q 259.76821887969976 215.1731728498459 259.76821887969976 205.1731728498459L 259.76821887969976 205.1731728498459L 259.76821887969976 150.961599691391Q 259.76821887969976 140.961599691391 249.76821887969976 140.961599691391L 253.54369883401057 140.961599691391Q 243.54369883401057 140.961599691391 243.54369883401057 150.961599691391z" pathFrom="M 243.54369883401057 150.961599691391L 243.54369883401057 150.961599691391L 259.76821887969976 150.961599691391L 259.76821887969976 150.961599691391L 259.76821887969976 150.961599691391L 259.76821887969976 150.961599691391L 259.76821887969976 150.961599691391L 243.54369883401057 150.961599691391" cy="195.1731728498459" cx="286.8447822625297" j="5" val="-17" barHeight="-74.2115731584549" barWidth="22.224520045689175"></path>
                                                                <path id="SvgjsPath1602" d="M 289.8447822625297 150.961599691391L 289.8447822625297 196.4423995370865Q 289.8447822625297 206.4423995370865 299.8447822625297 206.4423995370865L 296.0693023082189 206.4423995370865Q 306.0693023082189 206.4423995370865 306.0693023082189 196.4423995370865L 306.0693023082189 196.4423995370865L 306.0693023082189 150.961599691391Q 306.0693023082189 140.961599691391 296.0693023082189 140.961599691391L 299.8447822625297 140.961599691391Q 289.8447822625297 140.961599691391 289.8447822625297 150.961599691391z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskjbr64qiii)" pathTo="M 289.8447822625297 150.961599691391L 289.8447822625297 196.4423995370865Q 289.8447822625297 206.4423995370865 299.8447822625297 206.4423995370865L 296.0693023082189 206.4423995370865Q 306.0693023082189 206.4423995370865 306.0693023082189 196.4423995370865L 306.0693023082189 196.4423995370865L 306.0693023082189 150.961599691391Q 306.0693023082189 140.961599691391 296.0693023082189 140.961599691391L 299.8447822625297 140.961599691391Q 289.8447822625297 140.961599691391 289.8447822625297 150.961599691391z" pathFrom="M 289.8447822625297 150.961599691391L 289.8447822625297 150.961599691391L 306.0693023082189 150.961599691391L 306.0693023082189 150.961599691391L 306.0693023082189 150.961599691391L 306.0693023082189 150.961599691391L 306.0693023082189 150.961599691391L 289.8447822625297 150.961599691391" cy="186.4423995370865" cx="333.1458656910488" j="6" val="-15" barHeight="-65.4807998456955" barWidth="22.224520045689175"></path>
                                                            </g>
                                                            <g id="SvgjsG1586" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            <g id="SvgjsG1595" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                        </g>
                                                        <line id="SvgjsLine1651" x1="0" y1="0" x2="324.1075839996338" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1652" x1="0" y1="0" x2="324.1075839996338" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1653" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1654" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1655" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <g id="SvgjsG1626" class="apexcharts-yaxis" rel="0" transform="translate(15.892416000366211, 0)">
                                                        <g id="SvgjsG1627" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1628" font-family="Helvetica, Arial, sans-serif" x="20" y="52.5" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1629">30</tspan>
                                                                <title>30</title>
                                                            </text><text id="SvgjsText1630" font-family="Helvetica, Arial, sans-serif" x="20" y="96.153866563797" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1631">20</tspan>
                                                                <title>20</title>
                                                            </text><text id="SvgjsText1632" font-family="Helvetica, Arial, sans-serif" x="20" y="139.807733127594" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1633">10</tspan>
                                                                <title>10</title>
                                                            </text><text id="SvgjsText1634" font-family="Helvetica, Arial, sans-serif" x="20" y="183.46159969139097" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1635">0</tspan>
                                                                <title>0</title>
                                                            </text><text id="SvgjsText1636" font-family="Helvetica, Arial, sans-serif" x="20" y="227.11546625518798" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1637">-10</tspan>
                                                                <title>-10</title>
                                                            </text><text id="SvgjsText1638" font-family="Helvetica, Arial, sans-serif" x="20" y="270.769332818985" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1639">-20</tspan>
                                                                <title>-20</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1574" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 415px; height: 377px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        2022
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="growthChart" style="min-height: 154.875px;">
                                            <div id="apexchartscm6rc9ro" class="apexcharts-canvas apexchartscm6rc9ro apexcharts-theme-light" style="width: 207px; height: 154.875px;"><svg id="SvgjsSvg1656" width="207" height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1658" class="apexcharts-inner apexcharts-graphical" transform="translate(-3.5, -25)">
                                                        <defs id="SvgjsDefs1657">
                                                            <clipPath id="gridRectMaskcm6rc9ro">
                                                                <rect id="SvgjsRect1660" width="222" height="285" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskcm6rc9ro"></clipPath>
                                                            <clipPath id="nonForecastMaskcm6rc9ro"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskcm6rc9ro">
                                                                <rect id="SvgjsRect1661" width="220" height="287" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1666" x1="1" y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1667" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                                <stop id="SvgjsStop1668" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                                <stop id="SvgjsStop1669" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                                            </linearGradient>
                                                            <linearGradient id="SvgjsLinearGradient1677" x1="1" y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1678" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                                <stop id="SvgjsStop1679" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                                <stop id="SvgjsStop1680" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <g id="SvgjsG1662" class="apexcharts-radialbar">
                                                            <g id="SvgjsG1663">
                                                                <g id="SvgjsG1664" class="apexcharts-tracks">
                                                                    <g id="SvgjsG1665" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                        <path id="apexcharts-radialbarTrack-0" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG1671">
                                                                    <g id="SvgjsG1676" class="apexcharts-series apexcharts-radial-series" seriesName="Growth" rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath1681" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1677)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="5" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="78" index="0" j="0" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path>
                                                                    </g>
                                                                    <circle id="SvgjsCircle1672" r="54.65121951219512" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                                    <g id="SvgjsG1673" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1674" font-family="Public Sans" x="108" y="123" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Growth</text><text id="SvgjsText1675" font-family="Public Sans" x="108" y="99" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1682" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1683" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g id="SvgjsG1659" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                            <div class="d-flex">
                                                <div class="me-2">
                                                    <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <small>2022</small>
                                                    <h6 class="mb-0">$32.5k</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="me-2">
                                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <small>2021</small>
                                                    <h6 class="mb-0">$41.2k</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 208px; height: 377px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
            </div>



            <?php require_once 'partials/footer.php'; ?>
        </div>
    </div>
</div>