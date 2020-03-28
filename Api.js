$(document).ready(function () {
    $('#simpan').click(function () {
        var nama = $('#nama').val()
        var umur = $('#umur').val()
        var tanggal = $('#tanggal').val()
        var id = $('#id').val()
        // # untuk id, . untuk class
        axios.post('simpan.php', {
            'nama': nama,
            'umur': umur,
            'tanggal': tanggal,
            'id': id
        }).then(function (res) {
            var hasil = res.data
            alert(hasil)
            autoload()

        }).catch(function (err) {
            alert(err)
        })
    })
    autoload()

})

function autoload() {
    axios.get('tampil.php').then(function (res) {
        var dataTampil = res.data;

        $('#isi').html(dataTampil)

    }).catch(function (err) {
        alert(err)
    })
    $('#isi').load('tampil.php')
}

function kosong() {

    document.getElementById('nama').value = '';
    document.getElementById('umur').value = '';
    document.getElementById('tanggal').value = '';
    document.getElementById('id').value = '';
}

function edit(id) {
    axios.get('edit.php?id=' + id).then(function (res) {
        var dataTampil = res.data;
        document.getElementById('nama').value = dataTampil.nama;
        document.getElementById('umur').value = dataTampil.umur;
        document.getElementById('tanggal').value = dataTampil.tanggal;
        document.getElementById('id').value = dataTampil.id;
    }).catch(function (err) {
        alert(err)

    })


}

function hapus(id) {
    axios.get('hapus.php?id=' + id).then(function (res) {
        var hapus = res.data
        alert(hapus)
        autoload()
    }).catch(function (err) {
        alert(err)
    })
}