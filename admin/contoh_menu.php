
<nav class="navbar navbar-expand-sm  " style="margin:0px; padding: 0px; box-shadow: 1px 1px 15px 5px black;">
    
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php buat_menu("dashboard", "home", "Dashboard", array("admin", "author"));
            buka_dropdown("list-alt", "Artikel");
            buat_submenu("artikel", "Artikel");
            buat_submenu("kategori", "Kategori");
            buat_submenu("tag", "Tag");
            tutup_dropdown();
            buka_dropdown("th-list", "Tampilan");
            buat_submenu("template", "Template");
            buat_submenu("menu", "Menu");

            tutup_dropdown();

            ?>
        </ul>

        <ul class="nav navbar navbar-right">
            <?php buat_submenu("widget", "Widget"); ?>
        </ul>


    </div>
</nav>
