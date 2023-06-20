<div>
<!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-warning">
        <!-- Links -->
        <ul class="navbar-nav">
            <li wire:click="setMenu('announcement')" style="cursor: pointer"class="nav-item">
            <a class="nav-link">Announcement</a>
            </li>
            <li wire:click="setMenu('link2')" style="cursor: pointer" class="nav-item">
            <a class="nav-link">Event Seminar</a>
            </li>
            <li wire:click="setMenu('link3')" style="cursor: pointer" class="nav-item">
            <a class="nav-link">Link 3</a> 
            </li>
        </ul>
    </nav> 
</div>
