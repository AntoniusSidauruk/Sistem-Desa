function view_data() {
            $.ajax({
                url: "./page/search.php",
                method: "GET",
                success: function(data) {
                    $('').html(data);
                }
            });
        }

        $(document).ready(function() {
            $('#searchi').keyup(function() {
                var cari = $('#searchi').val();

                $.ajax({
                    url: "./page/search.php",
                    method: "POST",
                    data: {
                        cari: cari
                    },
                    success: function(data) {
                        $('#tampill').html(data);
                    }
                });
            });
        })