<style>
    .swatch-element {
        position: relative;
        /**margin: 8px 10px 0px 0px; **/
    }

    .swatch-element:not(.color) {
        overflow: hidden
    }

    .swatch-element-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px
    }

    .swatch-div {
        margin-bottom: 30px
    }

    .swatch-element.color {
        /**margin: 8px 15px 0px 0px;**/
    }

    .swatch-element.color .trang {
        background-color: #fcfcfc;
    }

    .swatch-element.color .trang.image-type {
        background: url(../theme/200000685745/1001041408/14/color_16704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .den {
        background-color: #111112;
    }

    .swatch-element.color .den.image-type {
        background: url(../theme/200000685745/1001041408/14/color_26704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .hong {
        background-color: #f662d6;
    }

    .swatch-element.color .hong.image-type {
        background: url(../theme/200000685745/1001041408/14/color_36704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .cam {
        background-color: #f3b426;
    }

    .swatch-element.color .cam.image-type {
        background: url(../theme/200000685745/1001041408/14/color_46704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .do {
        background-color: #f20808;
    }

    .swatch-element.color .do.image-type {
        background: url(../theme/200000685745/1001041408/14/color_56704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .vang {
        background-color: #fcef05;
    }

    .swatch-element.color .vang.image-type {
        background: url(../theme/200000685745/1001041408/14/color_66704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .xam {
        background-color: #615a5a;
    }

    .swatch-element.color .xam.image-type {
        background: url(../theme/200000685745/1001041408/14/color_76704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .xanh {
        background-color: #3a40fa;
    }

    .swatch-element.color .xanh.image-type {
        background: url(../theme/200000685745/1001041408/14/color_86704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .nude {
        background-color: #d6c291;
    }

    .swatch-element.color .nude.image-type {
        background: url(../theme/200000685745/1001041408/14/color_96704.html?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color .tim {
        background-color: #c500ff;
    }

    .swatch-element.color .tim.image-type {
        background: url(../theme/200000685745/1001041408/14/color_106704.png?v=44) no-repeat center center;
        background-size: cover;
    }

    .swatch-element.color+.tooltip {
        z-index: -1;
        white-space: nowrap;
    }

    .swatch-element.color:hover+.tooltip {
        opacity: 1;
        z-index: 100;
        top: -30px;
        min-width: 30px;
        background: #000;
        color: #fff;
        padding: 4px 6px;
        font-size: 10px;
        border-radius: 4px;
    }

    .swatch-element.color:hover+.tooltip:after {
        content: '';
        position: absolute;
        left: 16px;
        bottom: -3px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 3px 2.5px 0 2.5px;
        border-color: #000 transparent transparent transparent;
    }

    .swatch-element.color:hover label {
        box-shadow: 0 0 0 1px #000, inset 0 0 0 4px #fff;
        transform: scale(1.1);
    }

    .swatch-element label {
        padding: 10px;
        font-size: 14px;
        border-radius: 6px;
        height: 30px !important;
        min-width: auto !important;
        white-space: nowrap;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .swatch-element input {
        width: 100%;
        height: 100%;
        opacity: 0;
        position: absolute;
        z-index: 3;
        top: 0;
        left: 0;
        cursor: pointer;
    }

    .swatch .swatch-element:not(.color) input:checked+label {
        border-color: var(--primary-color) !important;
        color: var(--primary-color);
        position: relative;
    }

    .swatch .swatch-element:not(.color) input:checked+label:after {
        content: '';
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkCw8RJSHXzNuNAAAAfElEQVQoz7WRsQ2CYBQGLwRCaLRkDwqdwcLCSZjCmj2AgtoJXMbEUquzEAz+8Je89r675sGG59ka0ig+0ZFbJDGbgRwoAXemi/hb1QZw793ebB739cPgTdV2qvzZAFY+VL+VwB4nB59j5RLYhBVXcTBZw7NJDAN49LrFyz67GnkMHStx0wAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0xMS0xNVQxNzozNzozMyswMDowMGfDTJEAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMTEtMTVUMTc6Mzc6MzMrMDA6MDAWnvQtAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg==");
        background-repeat: no-repeat;
        background-size: contain;
        position: absolute;
        top: 0px;
        right: 0;
        width: 6px;
        height: 6px;
    }

    .swatch .swatch-element:not(.color) input:checked+label:before {
        content: '';
        padding: 4px;
        font-size: 10px;
        line-height: 1;
        position: absolute;
        top: -15px;
        right: -13px;
        background: var(--primary-color);
        width: 26px;
        height: 24px;
        transform: rotate(45deg);
        border-radius: 100%;
    }

    .swatch .color label {
        width: 33px;
        min-width: unset !important;
        height: 33px !important;
        line-height: 33px !important;
        border-radius: 6px !important;
        border: 1px solid #eee;
    }

    .swatch .color label:before {
        content: none;
    }

    .swatch {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .swatch .header {
        font-weight: bold;
        color: #333;
        flex: 0 0 100%;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .swatch .color label {
        position: relative;
        z-index: 2;
        border-radius: 100% !important;
        transition: box-shadow .25s ease, transform .25s ease;
        border: none
    }

    .swatch .color span {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background: #fff;
        top: 50%;
        left: 50%;
        z-index: 0;
        transform: translate(-50%, -50%);
    }

    .swatch .color input:checked+label {
        box-shadow: 0 0 0 1px #000, inset 0 0 0 4px #fff;
    }

    .swatch .color input:checked~span {
        opacity: 1;
        border: 1px solid #ccc;
    }

    .quick-view-product .swatch {
        padding: var(--block-spacing) 0;
    }

    .item_product_main .swatch-element.color {
        margin-right: 5px;
        margin-top: 5px;
    }

    .item_product_main .swatch .color label {
        width: 26px;
        height: 26px !important;
        line-height: 26px !important;
        padding: 0;
    }

    .swatch-color .swatch-element.color:hover+.tooltip {
        opacity: 1;
        z-index: 100;
        min-width: 30px;
        background: #000;
        color: #fff;
        padding: 4px 12px;
        border-radius: 4px;
        top: auto;
        bottom: calc(100% + 12px);
        left: calc(50%);
        transform: translateX(-50%);
        font-size: 12px;
    }

    .swatch-color .swatch-element.color:hover+.tooltip:after {
        border-style: solid;
        border-width: 3px 2.5px 0 2.5px;
        border-color: #000 transparent transparent transparent;
        background: #333333;
        content: "";
        height: 8px;
        position: absolute;
        transform: rotate(45deg);
        width: 8px;
        left: calc(50% - 4px);
        bottom: -4px;
    }

    span.swatch-value {
        font-weight: normal;
        font-size: 14px;
    }
</style>
