<?php



// Get beban kinerja
	$app->get('/bebankinerja', function($request, $response, $args) {
		
	$data = $this->db->prepare("select u.id, u.nama, u.jabatan_id as Jabatan, u.nip,  left(c.timestamp,4) as tahun, substr(c.timestamp,6,2) as bulan, count(u.id) as beban_kinerja from ckprincian c, user u

								where u.id=c.user_id and left(c.timestamp,4) ='2018' and left(c.timestamp,7) is Not Null

								group by bulan, u.id

								order by bulan,beban_kinerja DESC");  // sql query data beban kinerja
									
	$data->execute();								// execute query
	$ambil = $data->fetchAll();						// Fetch data
	return $this->response->withJson($ambil);		// tampilkan response dalam format Json
	
	});


// get pegawai
    $app->get('/pegawai', function ($request, $response, $args) {
        $data = $this->db->prepare("SELECT username,nama,email,nip,Jabatan_id,nip,nohp FROM user where nip is not null ORDER BY id");
        $data->execute();
        $ambil = $data->fetchAll();
        return $this->response->withJson($ambil);
    });
 
    // Retrieve pegawai with nip 
    $app->get('/pegawai/[{nip}]', function ($request, $response, $args) {
         $data = $this->db->prepare("SELECT * FROM user WHERE nip=:nip");
        $data->bindParam("nip", $args['nip']);
        $data->execute();
        $ambil = $data->fetchObject();
        return $this->response->withJson($ambil);
    });
	
	
	
	// get master kegiatan
    $app->get('/kegiatan', function ($request, $response, $args) {
        $data = $this->db->prepare("SELECT id, kegiatan, subjectmatter_id,tahun FROM ckpmasterkegiatan ORDER BY id");
        $data->execute();
        $ambil = $data->fetchAll();
        return $this->response->withJson($ambil);
    });
	
	
	 // Retrieve master kegiatan with subjectmatter
    $app->get('/kegiatan/[{subjectmatter_id}]', function ($request, $response, $args) {
         $data = $this->db->prepare("SELECT id, kegiatan, subjectmatter_id,tahun FROM ckpmasterkegiatan WHERE subjectmatter_id=:subjectmatter_id");
        $data->bindParam("subjectmatter_id", $args['subjectmatter_id']);
        $data->execute();
        $ambil = $data->fetchObject();
        return $this->response->withJson($ambil);
    });
 
 
 
 
 // get ckp rincian
    $app->get('/ckp', function ($request, $response, $args) {
         $data = $this->db->prepare("Select u.id as user_id, u.nama, u.nip, c.id,c.jeniskegiatanckp_id, j.jenis, c.satuanckp_id,c.target, c.realisasi, c.kualitas, 
		 
									substr(c.timestamp,6,2) as bulan, left(c.timestamp,4) as tahun 

									from ckprincian c, user u, jeniskegiatanckp j

									where c.user_id = u.id && c.jeniskegiatanckp_id = j.id

									&& left(c.timestamp,4) is not null && u.id > 1

									order by bulan");
        $data->execute();
        $ambil = $data->fetchAll();
        return $this->response->withJson($ambil);
    });
 
    // Retrieve ckp rincian with nip  
    $app->get('/ckp/[{bulan}]', function ($request, $response, $args) {
         $data = $this->db->prepare("Select u.id as user_id, u.nama, u.nip, c.id,c.jeniskegiatanckp_id, j.jenis, c.satuanckp_id,c.target, c.realisasi, c.kualitas, 
		 
									substr(c.timestamp,6,2) as bulan, left(c.timestamp,4) as tahun 

									from ckprincian c, user u, jeniskegiatanckp j

									where c.user_id = u.id && c.jeniskegiatanckp_id = j.id

									&& left(c.timestamp,4) is not null && u.id > 1 && bulan=:bulan

									");
        $data->bindParam("bulan", $args['bulan']);
        $data->execute();
        $ambil = $data->fetchObject();
        return $this->response->withJson($ambil);
    });
	
	
	
	
	
	
	
  ?>