<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>

    <form name="Latihan02" id="Latihan02" method="post" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
  
        <div>
            Nama
            <input type="text" id="nama" name="txNAMA">
        </div>

        <div>
            Jenis Kelamin
            <input type="radio" id="jk" name="txJK" value="L">Laki-Laki
            <input type="radio" id="jk" name="txJK" value="p">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN" id="Jurusan">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TI PAR</option>
                <option value="SK">SK</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" id="txhobi" name="musik">Musik
            <input type="checkbox" id="txhobi" name="nari">Nari
            <input type="checkbox" id="txhobi"name="healing">Healing
            <input type="checkbox" id="txhobi"name="lari">Lari
            <input type="checkbox" id="txhobi"name="joging">Joging
            <input type="checkbox" id="txhobi"name="makan">Makan
            <input type="checkbox" id="txhobi"name="membaca">Membaca
        </div>
        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>
    
    <script>
        function checkform(){
            let f = document.getElementById("Latihan02").elements;
            let nim = f.nim.value;
            let nama = f.nama.value;
            let jk = f.jk.value;
            let Jurusan = f.Jurusan.value;
            let hobi_musik = f.txhobi[0].checked;
            let hobi_nari = f.txhobi[1].checked;
            let hobi_healing = f.txhobi[2].checked;
            let hobi_lari = f.txhobi[3].checked;
            let hobi_joging = f.txhobi[4].checked;
            let hobi_makan= f.txhobi[5].checked;
            let hobi_membaca = f.txhobi[6].checked;
            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("Jenis Kelamin: "+jk);

            console.log("Jurusan: "+Jurusan);
            console.log("Hobi: "+hobi_musik);
            console.log("Hobi: "+hobi_nari);
            console.log("Hobi: "+hobi_healing);
            console.log("Hobi: "+hobi_lari);
            console.log("Hobi: "+hobi_joging);
            console.log("Hobi: "+hobi_makan);
            console.log("Hobi: "+hobi_membaca);
            console.log("Hobi musik: "+hobi_musik);
            return false;
        }

    </script>


</body>
</html>