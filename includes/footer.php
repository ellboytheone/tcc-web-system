
            </div>
        <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("open");
            document.getElementById("overlay").classList.toggle("open");
        }
        </script>
        <script src="/gabnet-system/assets/js/functions.js"></script>
        <?php if (!empty($js_extra)): ?>
            <?php foreach ($js_extra as $js):?>
                <link rel="stylesheet" href="/gabnet-system/assets/js/<?= htmlspecialchars($js) ?>"/>
            <?php endforeach;?>
        <?php endif; ?>
    </body>
</html>