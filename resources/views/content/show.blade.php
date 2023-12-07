<div style="width: 100%; height: 99%; position: relative; background: #374050; border: 1px black solid">
    <div
        style="left: 12px; top: 27px; position: absolute; color: white; font-size: 20px; font-family: Roboto; font-weight: 700; line-height: 11px; word-wrap: break-word">
        {{$product->name}}
    </div>
    <div
        style="left: 12px; top: 68px; position: absolute; color: rgba(255, 255, 255, 0.70); font-size: 11px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Артикул
    </div>
    <div
        style="left: 91px; top: 68px; position: absolute; color: white; font-size: 11px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        {{$product->article}}
    </div>
    <div
        style="left: 12px; top: 97px; position: absolute; color: rgba(255, 255, 255, 0.70); font-size: 11px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Название
    </div>
    <div
        style="left: 91px; top: 97px; position: absolute; color: white; font-size: 11px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        {{$product->name}}
    </div>
    <div
        style="left: 12px; top: 126px; position: absolute; color: rgba(255, 255, 255, 0.70); font-size: 11px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Статус
    </div>
    <div
        style="left: 91px; top: 126px; position: absolute; color: white; font-size: 11px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        {{$product->status}}
    </div>
    <div
        style="left: 12px; top: 155px; position: absolute; color: rgba(255, 255, 255, 0.70); font-size: 11px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Атрибуты
    </div>
    <div
        style="left: 91px; top: 155px; position: absolute; color: white; font-size: 11px; font-family: Roboto; font-weight: 400; line-height: 13px; word-wrap: break-word">
        Цвет: {{json_decode($product->data)->color}}<br/>
        Размер: {{json_decode($product->data)->size}}
    </div>
    <div style="left: 85%; top: 23px; position: absolute">
        <div style="left: 0px; top: 0px; position: absolute;">
            <a href="/edit?id={{$product->id}}">
                <svg width="25" height="25" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="25" height="25" fill="black" fill-opacity="0.4"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.97011 5.02981L9.50002 4.49991C10.0523 3.94762 10.0523 3.05219 9.50002 2.49991C8.94773 1.94762 8.0523 1.94762 7.50002 2.49991L6.95753 3.0424C7.4188 3.88305 8.11726 4.57587 8.97011 5.02981ZM5.50209 4.49783L2.8564 7.14353C2.43134 7.56859 2.21881 7.78112 2.07907 8.04221C1.93934 8.30331 1.88039 8.59804 1.7625 9.18749L1.6471 9.76447C1.58058 10.0971 1.54732 10.2634 1.64193 10.358C1.73654 10.4526 1.90284 10.4193 2.23545 10.3528L2.23545 10.3528L2.81243 10.2374L2.81244 10.2374C3.40189 10.1195 3.69661 10.0606 3.95771 9.92085C4.2188 9.78112 4.43132 9.5686 4.85636 9.14356L4.85638 9.14354L4.8564 9.14353L7.51082 6.4891C6.71004 5.96895 6.02669 5.29005 5.50209 4.49783Z"
                          fill="#C4C4C4" fill-opacity="0.7"/>
                </svg>
            </a>
        </div>
        @if(auth()->check() && auth()->user()->isAdmin())
            <div style="left: 30px;  position: absolute">
                <a href="/delete?id={{$product->id}}">
                    <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="25" height="25" fill="black" fill-opacity="0.4"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M10 5.00763C9.77873 5.00763 9.5718 5.02718 9.41331 5.05934C9.33405 5.07543 9.278 5.09245 9.24301 5.1063C9.23589 5.10912 9.23029 5.11155 9.22608 5.11351C9.03349 5.27853 8.75023 5.26 8.57857 5.06535C8.39916 4.8619 8.4096 4.54309 8.60189 4.35327C8.70024 4.25618 8.81839 4.19854 8.90927 4.16256C9.00837 4.12333 9.1191 4.09305 9.23389 4.06975C9.46349 4.02315 9.73209 4 10 4C10.2679 4 10.5365 4.02315 10.7661 4.06975C10.8809 4.09305 10.9916 4.12333 11.0907 4.16256C11.1816 4.19854 11.2998 4.25618 11.3981 4.35327C11.5904 4.54309 11.6008 4.8619 11.4214 5.06534C11.2498 5.26 10.9665 5.27853 10.7739 5.11351C10.7697 5.11155 10.7641 5.10912 10.757 5.1063C10.722 5.09245 10.6659 5.07543 10.5867 5.05934C10.4282 5.02718 10.2213 5.00763 10 5.00763ZM5.73422 7.37742C5.56669 7.35939 5.34431 7.35878 5 7.35878V6.35114C5.00773 6.35114 5.01544 6.35114 5.02312 6.35114C5.03846 6.35114 5.0537 6.35114 5.06883 6.35114H14.9312C14.9463 6.35114 14.9615 6.35114 14.9769 6.35114L15 6.35114V7.35878C14.6557 7.35878 14.4333 7.35939 14.2658 7.37742C14.1062 7.39459 14.05 7.42331 14.0212 7.44369C13.9692 7.48044 13.9245 7.52768 13.8898 7.58269C13.8705 7.61318 13.8434 7.67267 13.8271 7.8415C13.8101 8.01875 13.8095 8.25404 13.8095 8.61832L13.8095 12.5141C13.8095 12.9607 13.8096 13.3455 13.7704 13.6537C13.7284 13.984 13.6338 14.3005 13.3911 14.5573C13.1484 14.8141 12.8492 14.9142 12.537 14.9586C12.2458 15 11.882 15 11.4599 15H8.54009C8.11795 15 7.75423 15 7.46296 14.9586C7.15081 14.9142 6.85159 14.8141 6.6089 14.5573C6.3662 14.3005 6.27156 13.984 6.22959 13.6537C6.19043 13.3455 6.19045 12.9607 6.19048 12.5141L6.19048 8.61832C6.19048 8.25404 6.1899 8.01875 6.17286 7.8415C6.15663 7.67267 6.12948 7.61318 6.11022 7.58269C6.07548 7.52768 6.03084 7.48044 5.97884 7.44369C5.95002 7.42331 5.8938 7.39459 5.73422 7.37742ZM12.9485 7.35878H7.05147C7.08774 7.48305 7.10797 7.61075 7.12035 7.73952C7.14288 7.97388 7.14287 8.26096 7.14286 8.59386L7.14286 12.4809C7.14286 12.9702 7.14387 13.2864 7.17348 13.5194C7.20125 13.738 7.24608 13.8064 7.28233 13.8448C7.31858 13.8832 7.38332 13.9306 7.58986 13.96C7.8101 13.9913 8.10901 13.9924 8.57143 13.9924H11.4286C11.891 13.9924 12.1899 13.9913 12.4101 13.96C12.6167 13.9306 12.6814 13.8832 12.7177 13.8448C12.7539 13.8064 12.7988 13.738 12.8265 13.5194C12.8561 13.2864 12.8571 12.9702 12.8571 12.4809V8.59385C12.8571 8.26096 12.8571 7.97388 12.8797 7.73952C12.892 7.61075 12.9123 7.48305 12.9485 7.35878ZM8.88889 9.29007C9.15188 9.29007 9.36508 9.51564 9.36508 9.79389V11.5573C9.36508 11.8355 9.15188 12.0611 8.88889 12.0611C8.6259 12.0611 8.4127 11.8355 8.4127 11.5573V9.79389C8.4127 9.51564 8.6259 9.29007 8.88889 9.29007ZM11.1111 9.29007C11.3741 9.29007 11.5873 9.51564 11.5873 9.79389V11.5573C11.5873 11.8355 11.3741 12.0611 11.1111 12.0611C10.8481 12.0611 10.6349 11.8355 10.6349 11.5573V9.79389C10.6349 9.51564 10.8481 9.29007 11.1111 9.29007Z"
                              fill="#C4C4C4" fill-opacity="0.7"/>
                    </svg>
                </a>
            </div>
        @endif
    </div>
</div>
