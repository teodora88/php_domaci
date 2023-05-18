$('#dodajForm').submit(function () {
    event.preventDefault();
    console.log("Dodavanje");

    const $form = $(this);
    const $input = $form.find('input, select, button, textarea');


    const serijalizacija = $form.serialize();

    console.log(serijalizacija);

    $input.prop('disabled', true);

    req = $.ajax({
      url: 'handler/dodajProizvod.php',
      type: 'post',
      data: serijalizacija
    });

    req.done(function (res, textStatus, jqXHR) {
      if (res.indexOf("Ok") != -1) {
        alert("Dodat je nov proizvod");
        location.reload(true);

      } else console.log("Proizvod nije dodat" + res);
  });

    req.fail(function (jqXHR, textStatus, errorThrown) {
      console.error('Greska: ' + textStatus, errorThrown)
    });
  });



  $('#btn').click(function () {
    $('#pregled').toggle();
  });

  $('#btnDodaj').submit(function () {
    $('#myModal').modal('toggle');
    return false;
  });

  $('#btnIzmeni').submit(function () {
    $('#myModal').modal('toggle');
    return false;
  });

  $("#kategorija").change(function(){
    var kategorijaId =  $('#kategorija').val();
    $('#kategorijaId').val(kategorijaId);

  });

  //Edit
  $('.btn-info').click(function () {

    const trenutni = $(this).attr('data-id2');
    console.log(trenutni);
    var imeProizvoda = $(this).closest('tr').children('td[data-target=imeProizvoda]').text();
    console.log(imeProizvoda);
    var brojProizvoda = $(this).closest('tr').children('td[data-target=brojProizvoda]').text();
    var cena = $(this).closest('tr').children('td[data-target=cena]').text();
    console.log(cena);
    var kategorijaId = $(this).closest('tr').children('td[data-target=kategorijaId]').text();
    console.log(kategorijaId);


    $('#proizvodId').val(trenutni);
    $('#imeProizvoda').val(imeProizvoda);
    $('#brojProizvoda').val(brojProizvoda);
    document.getElementById('kategorijaOznaceni').value = kategorijaId;
  });