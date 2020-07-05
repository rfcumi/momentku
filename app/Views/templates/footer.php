    <div><em>momentku.info | &copy; 2020</em></div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
        //fix
        $(document).ready(function(){
            $("#submitFormUser").on('click', function(){
                var name     = $('#name').val();
                var email    = $('#email').val();
                var whatsapp = $('#whatsapp').val();
                var kode     = $('#kode').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('c_undangan/client/adkfjaldsjtest')?>",
                    dataType : "JSON",
                    data : {name:name, email:email, whatsapp:whatsapp, kode:kode},
                    success : function(data){
                        alert(data.info);
                        if(data.send){
                            $("#kode").removeClass("hidden");
                        }
                    }
                });
            });
        });
    </script>
</body></html>
