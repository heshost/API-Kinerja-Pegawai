CREATE TABLE `ckpjeniskegiatan` (
  `id` int(11) NOT NULL,
  `jeniskegiatan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `ckpmasterkegiatan` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `jeniskegiatan_id` int(11) DEFAULT NULL,
  `subjectmatter_id` int(11) DEFAULT NULL,
  `tahun` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `ckpmasterperiode` (
  `id` int(11) NOT NULL,
  `periode` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `ckpmasterredaksi` (
  `id` int(11) NOT NULL,
  `redaksi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `ckprincian` (
  `id` bigint(20) NOT NULL,
  `redaksi_id` int(11) DEFAULT NULL,
  `kegiatan_id` int(11) DEFAULT NULL,
  `periode_id` int(11) DEFAULT NULL,
  `kegiatanlain` varchar(500) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `jeniskegiatanckp_id` int(11) NOT NULL,
  `satuanckp_id` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `realisasi` int(11) DEFAULT NULL,
  `realisasistafksk` int(11) DEFAULT NULL,
  `isian` double(4,2) DEFAULT NULL,
  `ketepatanwaktu` double(4,2) DEFAULT NULL,
  `konsistensi` double(4,2) DEFAULT NULL,
  `kualitas` double(5,2) DEFAULT NULL,
  `kodebutirkeg` varchar(20) DEFAULT NULL,
  `angkakredit` double(5,2) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `keteranganstafksk` varchar(500) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `timestampstafksk` timestamp NULL DEFAULT NULL,
  `ckp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `otomatis` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `jeniskegiatanckp` (
  `id` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `satuanckp` (
  `id` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nohp` varchar(13) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `jabatankantor_id` int(11) DEFAULT NULL,
  `pangkatgolongan_id` int(11) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nipabsen` varchar(9) DEFAULT NULL,
  `nipcssatpam` varchar(15) DEFAULT NULL,
  `leveluser_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `token` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
