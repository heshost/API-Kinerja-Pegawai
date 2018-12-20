# API-Kinerja-Pegawai
API Kinerja Rest - Slim Framework

API Kinerja Pegawai menampilkan Data Pegawai, Master Kegiatan, Capaian Kinerja dan Beban Kerja

  - REST Paradigm

  - SLIM Framework
  
  - Json
  
Step :  
  
1. Set Direktori API Pada Folder Webserver misal : htdocs <xampp> atau www <WampServer>
            Path Direktori :
    
                           <Nama Project> 
                           
                                    |__ public
                                    
                                           |__ index.php
 
2. Direktori Project memiliki folder Vendor, hasil install Slim Framework

3. Install Slim with Composer

      Download  Composer  https://getcomposer.org/download/ , Completely Install
      
      Set Direktori Install    :  
      
                /c/wamp/www/<Nama Project>
  
      Install Slim Framework   : 
       
               composer require slim/slim "^3.0"
               
      Set URL ( Port : Bebas ) :
      
                php -S localhost:7070
                
 4. URL Web project adalah http://locahost:7070
 
 Hasil instalasi akan menambah satu direktori bernama "Vendor", vendor berisi Framework Slim
 
 
 5. Configurasi Database
 
    Create Database "ckp"
    
    Import database ckp.sql.zip
    
    
 6. Untuk menampilkan API
 
             http://locahost:7070/<parameter>
    
             http://locahost:7070/pegawai
    
             http://locahost:7070/pegawai/<nip:parameter>
    
    Data dihasilkan dalam format Json..





Happy Coding

Jika Ada Kesalahan atau API tidak berjalan seperti diharapkan, silahkan utak-atik  ReWriteRule Engine

Semoga Bermanfaat....
 
 
             
      
      
      

  


