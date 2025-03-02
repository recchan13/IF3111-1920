<!DOCTYPE html>
    <head>
        <title>SIMPLE LAPOR</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    </head>
    <body>
        <div class=wrap>
            <div class=header>
                <br>
                <h1>SIMPLE LAPOR!</h1>
                <br>

                <p1> Layanan Aspirasi dan Pengaduan Online ITERA </p1>
                <br>
                <br>
            </div>
            <div class=konten>
                <br>
                <br>
                
                <form onsubmit="return validateFile()" action="<?php echo base_url('index.php/laporan/create')?>" method="POST" enctype="multipart/form-data">
                    <textarea id="laporan" name="laporan" rows="20" cols="100" placeholder="Laporan/Komentar"></textarea>
                    
                    <p style="color:red" id="error_laporan"></p>
                    <br>
                    
                    <select name="id_aspek" style="width: 150px" rows="0" cols="80">
                        <?php
                        foreach($aspek as $value){?>
                            <option value="<?php echo $value->id?>"><?php echo $value->nama ?></option>
                        <?php 
                        } ?>
                    </select>
                    <br>
                    <br>
                    
                    <input type="file" id='file_lapor' name="fileLapor" id="fileLapor">
                    <br>
                    <br>

                    <button type="submit"  disabled="true" id="submitButton" name="buatLapor" class="btn btn-primary">Buat LAPOR!</button>
                </form>
                <br>
                <br>
                <br>
            </div>
            <div class=footer>
                &copy; 
                <br>
                Reza Octaviany . 14117062
                <br>
                Raras Franita . 14117063
            </div>
        </div>
        <script>
    
            function validation(){
                var submitButton = document.getElementById('submitButton')
                var error_laporan = document.getElementById('error_laporan')
                var laporan = document.getElementById('laporan')
                console.log(submitButton)
                console.log(laporan.value.length)
                if(laporan.value.length>20){
                    submitButton.removeAttribute('disabled')
                    error_laporan.innerHTML=''
                }else{
                    submitButton.setAttribute('disabled', true)
                    error_laporan.innerHTML= 'Panjang kata harus lebih dari 20'
                }
                return true;
            }

            function getFileName(name){
                var splitName = name.split('.')
                return splitName[splitName.length-1].toLowerCase()
            }

            function validateFile(){
                var file = document.getElementById('file_lapor')
                if(file.value.length!=0){
                    var name = getFileName(file.value)
                    if(name == "png" || name == "jpg" || name == "jpeg" || name == "doc" || name == "docx" || name == "pdf" || name == "xls" || name == "xlsx" || name == "ppt" || name == "pptx"){
                        return true
                    }else{
                        alert('format file tidak diterima !')
                        return false
                    }
                }else{
                    alert('harus memiliki lampiran file!')
                    return false
                }
            }
        document.addEventListener('keyup', function(){
            validation()
        });
        </script>
    </body>
</html>