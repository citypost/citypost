
    <?php include_once(VIEW_PATH . DS . "nav.php"); ?>

    <div id="body-main-container" style=" background-repeat:no-repeat; background-size:cover;">

        <div class="container-fluid">
            <div class="rowFirst">
                <h1 style="color:white;"><?= $this->scope['title']; ?></h1>
                <h3 style="color:white;"><?= $this->scope['message']; ?></h3>
            </div>
            <!-- body-sub-container-1 -->
            <div class="conteudo">

                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 rowFirst">
                        <?php include_once($this->path); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once(VIEW_PATH . DS . "footer.php"); ?>
    </body>
</html>

