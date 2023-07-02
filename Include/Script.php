        <script src="assets/js/vendors.min.js"></script>

        <!-- page js -->
        <script src="assets/vendors/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/vendors/chartjs/Chart.min.js"></script>
        <script src="assets/js/pages/dashboard-e-commerce.js"></script>
        <script>
            $(document).ready(function() {
                $("#logout").click(function() {
                    if (window.confirm('Are you sure you want to logout?')) {
                        window.location.href = "logout.php";
                    };
                    return false;
                });
            });
        </script>

        <!-- Core JS -->
        <script src="assets/js/app.min.js"></script>
        <script src="../js/function.js"></script>
            
        <!-- Core JS -->
        <script src="assets/js/app.min.js"></script>

        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#wholesale_catalog_show').DataTable();
            } );
        </script>

        <script>
            $(document).ready(function() {
                $('#retail_catalog_show').DataTable();
            } );
        </script>

        <script>
            $(document).ready(function() {
                $('#material_table').DataTable();
            } );
        </script>

        <script>
            $(document).ready(function() {
                $('#example1').DataTable();
            } );
        </script>

        



    </body>

</html>