


<style>
    .bg-back{
        background-color: #013243;
    }
    
</style>
    <nav class="navbar navbar-expand-md bg-back navbar-dark fixed-top">
        <a href="#" class="navbar-brand"><i class="fab fa-pied-piper-alt"></i>Sync Code </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myitem">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myitem">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a href="/" class="nav-link">Welcome</a>
                </li>
                <li class="nav-item ">
                    <a href="/helps" class="nav-link">Contact us</a>
                </li>
                <li class="nav-item ">
                    <a href="/contact" class="nav-link">Helps</a>
                </li>

                <li class="nav-item dropdown navbar-right " >
                    <a href="#" class="nav-link dropdown-toggle "  data-toggle="dropdown" ><i class="fas fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu">
                            <a href="{{route('laptops.index')}}" class="dropdown-item">all item</a>
                            <a href="{{route('categories.index')}}" class="dropdown-item">all categories</a>
                            <a href="{{route('hardware.index')}}" class="dropdown-item">all hardware</a>

                        </div>
                </li>
            </ul>
        </div>
    </nav>
