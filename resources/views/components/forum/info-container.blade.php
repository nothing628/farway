<div class="mb-[30px] clear-both bg-[rgba(0,0,0,.025)]">
    <div class="">
        <ul class="block m-0">
            <li class="bg-[#343840]">
                <dl class="relative overflow-hidden">
                    <dt class="text-white w-full pl-4 my-[14px]">
                        <div class=""><i class="far fa-chart-line"></i> &nbsp;Information</div>
                    </dt>
                </dl>
            </li>
        </ul>
        <div class="float-right block relative mr-4 -mt-[36px]" aria-expanded="true">
            <a class="text-white" href="#">
                <span class="fa fa-minus block"></span>
                <span class="fa fa-plus hidden"></span>
            </a>
        </div>

        <div class="p-[10px] ">
            <div class="bg-white">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
