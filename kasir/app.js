function Hitung() {
    let harga1 = parseInt(document.getElementById("harga_hardisk").value);
    let harga2 = parseInt(document.getElementById("harga_samsungSSD").value);
    let harga3 = parseInt(document.getElementById("harga_samsungPortable").value);
    let harga4 = parseInt(document.getElementById("harga_asrockTRX").value);
    let harga5 = parseInt(document.getElementById("harga_edifier").value);
    
    let qty1 = parseInt(document.getElementById("hardisk").value);
    let qty2 = parseInt(document.getElementById("samsungSSD").value);
    let qty3 = parseInt(document.getElementById("samsungPortable").value);
    let qty4 = parseInt(document.getElementById("asrockTRX").value);
    let qty5 = parseInt(document.getElementById("edifier").value);
    
    let disc = parseInt(document.getElementById("disc").value);

    let sub_total = (harga1*qty1)+(harga2*qty2)+(harga3*qty3)+(harga4*qty4)+(harga5*qty5);
    
    let diskon = sub_total * (disc/100);
    
    let total = sub_total - diskon;
    document.getElementById("sub_total").innerHTML = "Rp. " + sub_total;
    document.getElementById("total").innerHTML = "Rp. " + total;
}
