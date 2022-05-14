<?php
require("./Koneksi.php");

// fungsi tampil
function tampil($nama_tabel)
{
    $query = koneksi()->prepare("SELECT * FROM $nama_tabel");
    $query->execute();
    $data = $query->fetchAll();

    if (!empty($data)) {
        if ($nama_tabel == "buku") {
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['id_buku'] . "</td>";
                echo "<td>" . $row['judul_buku'] . "</td>";
                echo "<td>" . $row['penulis'] . "</td>";
                echo "<td>" . $row['penerbit'] . "</td>";
                echo "<td>" . $row["tahun_terbit"] . "</td>";
                echo "<td>";
                echo "<a href='FormBuku.php?id_buku=" . $row['id_buku'] . "'><button style='background-color:green; color:white'>edit</button></a>";
                echo " ";
                echo "<a href='Buku.php?id_buku=" . $row['id_buku'] . "'><button style='background-color:red; color:white'>Hapus</button></a>";
                echo "</td>";
                echo "</tr>";
            }
        }elseif ($nama_tabel == "member") {
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['id_member'] . "</td>";
                echo "<td>" . $row['nama_member'] . "</td>";
                echo "<td>" . $row['nomor_member'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row["tgl_mendaftar"] . "</td>";
                echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
                echo "<td>";
                echo "<a href='FormMember.php?id_member=" . $row['id_member'] . "'><button style='background-color:green; color:white'>edit</button></a>";
                echo " ";
                echo "<a href='Member.php?id_member=" . $row['id_member'] . "'><button style='background-color:red; color:white'>Hapus</button></a>";
                echo "</td>";
                echo "</tr>";
            }
        }elseif ($nama_tabel == "peminjaman") {
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row["id_peminjaman"] . "</td>";
                echo "<td>" . $row["tgl_pinjam"] . "</td>";
                echo "<td>" . $row["tgl_kembali"] . "</td>";
                echo "<td>";
                echo "<a href='FormPeminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "'><button style='background-color:green; color:white'>edit</button></a>";
                echo " ";
                echo "<a href='Peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "'><button style='background-color:red; color:white'>Hapus</button></a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }
}

// fungsi tambah
function tambahdatabuku($judul,$penulis,$penerbit,$thnterbit){
    $sql = "INSERT INTO `buku` ( `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul,:penulis,:penerbit,:tahun_terbit)";
    $query = koneksi()->prepare($sql);
    $data = $query->execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $thnterbit));
    if (!empty($data)) {
        header('location:Buku.php');
    }
}

function tambahdatamember($nama, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    $sql = "INSERT INTO `member` (`nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama_member,:nomor_member,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
    $query = koneksi()->prepare($sql);
    $data = $query->execute(array(':nama_member' => $nama, ':nomor_member' => $nomor_member, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
    if (!empty($data)) {
        header('location:Member.php');
    }
}

function tambahdatapeminjaman($tglpinjam, $tglkembali)
{
    $sql = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tglpinjam,:tglkembali)";
    $query = koneksi()->prepare($sql);
    $data = $query->execute(array(':tglpinjam' => $tglpinjam, ':tglkembali'=> $tglkembali));

    if (!empty($data)) {
        header('location:Peminjaman.php');
    }
}

// fungsi edit
function editbuku()
{
    $query = koneksi()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
    $query->execute();
    $GLOBALS['data'] = $query->fetchAll();
}

function editmember()
{
    $query = koneksi()->prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
    $query->execute();
    $GLOBALS['data'] = $query->fetchAll();
}

function editpeminjaman(){
    $query = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
    $query->execute();
    $GLOBALS['data'] = $query->fetchAll();
}


// fungsi update
function updatebuku( $id, $judul, $penulis, $penerbit, $tahunTerbit)
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE buku SET judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $tahunTerbit . "' where id_buku=" . $id
    );
    $data = $pdo_statement->execute();
    if ($data) {
        header('location:Buku.php');
    }
}

function updatemember($id, $nama, $no_member, $almt, $tgl_daftar, $tgl_terakhir_bayar)
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE member SET nama_member='" . $nama . "', nomor_member='" . $no_member . "', alamat='" . $almt . "', tgl_mendaftar='" . $tgl_daftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id
    );
    $data = $pdo_statement->execute();
    if ($data) {
        header('location:Member.php');
    }
}

function updatepeminjaman($id, $tglpinjam, $tglkembali) 
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE peminjaman SET tgl_pinjam='" . $tglpinjam ."', tgl_kembali='" . $tglkembali . "' WHERE id_peminjaman = ". $id
    );
    $data = $pdo_statement->execute();
    if (!empty($data)) {
        header('location:Peminjaman.php');
    }
}


// fungsi hapus 
function hapusbuku($id_buku)
{
    $stmt = koneksi()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
    $result = $stmt->execute();
    if ($result) {
        header('location:Buku.php');
    }
}

function hapusmember($id_member)
{
    $stmt = koneksi()->prepare("DELETE FROM member where id_member=" . $id_member);
    $result = $stmt->execute();
    if ($result) {
        header('location:Member.php');
    }

}

function hapuspeminjaman($id_peminjaman)
{
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
    $result = $stmt->execute();
    if ($result) {
        header('location:Peminjaman.php');
    }
}