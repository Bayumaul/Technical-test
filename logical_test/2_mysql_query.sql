 SELECT a.*, b.nilai, c.mk_kode
        FROM tb_mahasiswa a
        INNER JOIN tb_mahasiswa_nilai b ON a.id = b.mhs_id
        INNER JOIN tb_matakuliah c ON b.mk_id = b.id
        WHERE mk_kode = "MK303" 
        ORDER BY nilai DESC LIMIT 1;