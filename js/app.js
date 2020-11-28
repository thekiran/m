const toggler = document.querySelector('.dropdown-toggler')
const menu = document.querySelector('.menu-mega')

toggler.addEventListener('click', (e) => {
  e.preventDefault()
  menu.classList.toggle('active')
})

// depart.addEventListener('onselect',e=>{
//     console.log(e)
// })
$('#depart_name_choose').on('change', function () {
  //   console.log( this.value );
  //   console.log(location)
  const path = location.pathname
  const last = () => {
    var n = location.href.split('/')
    return n[n.length - 1]
  }
  let par = last()
  // console.log(par)
  // var str = path
  // var lastIndex = str.lastIndexOf("/");
  //  str.split("/")[0]
  let str = `${location.href}`
  str = str.slice(0, -10)
  // console.log(str);
  // console.log(location.href)
  // var lastIndex = str.endsWith('.html')

  // str = str.substring(0, lastIndex);
  // console.log(lastIndex)
  const host = window.location.host
  // console.log(host)
  if (this.value.length > 1) {
    const out = `${str}${this.value}.html`
    // console.log(out)
    // window.location = out;
  }
})

const submit = () => {
  const form = document.querySelector('#form')
  const depart = document.querySelector('#depart_name')
  const {
    depart_name,
    email_add,
    tele_no,
    adresse,
    postcode,
    city,
    dest,
    dp1598335005261,
    timeset,
    snum,
    inlineRadio1,
    inlineRadio2,
    inlineRadio3,
    inlineRadio4,
    inlineRadio5,
    infos,
  } = form
  // console.log(depart_name.value)
}

const depart = (value) => {
    console.log('mail')
  if (value === '01 Ain') return 'kirankumarka43@gmail.com'
  else if (value === '02 Aisne') return 'cpamtaxiconventionne@gmail.com'
  else if (value === '03 Allier') return 'chriqui.yoni@gmail.com'
  else if (value === '04 Alpes de Hautes-Provence')
    return 'cpamtaxiconventionne@gmail.com'
  else if (value === '05 Hautes-Alpes') return 'chriqui.yoni@gmail.com'
  else if (value === '06 Alpes-Maritimes') return 'chriqui.yoni@gmail.com'
  else if (value === '07 Ardèche') return 'chriqui.yoni@gmail.com'
  else if (value === '08 Ardennes') return 'chriqui.yoni@gmail.com'
  else if (value === '09 Ariège') return 'chriqui.yoni@gmail.com'
  else if (value === '10 Aube') return 'cpamtaxiconventionne@gmail.com'
  else if (value === '11 Aude') return 'chriqui.yoni@gmail.com'
  else if (value === '12 Aveyron') return 'chriqui.yoni@gmail.com'
  else if (value === '13 Bouches-du-Rhône') return 'chriqui.yoni@gmail.com'
  else if (value == '14 Calvados') return 'chriqui.yoni@gmail.com'
  else if (value == '15 Cantal') return 'chriqui.yoni@gmail.com'
  else if (value == '16 Charente') return 'chriqui.yoni@gmail.com'
  else if (value == '17 Charente-Maritime') return 'chriqui.yoni@gmail.com'
  else if (value == '18 Cher') return 'chriqui.yoni@gmail.com'
  else if (value == '19 Corrèze') return 'chriqui.yoni@gmail.com'
  else if (value == '2A Corse-du-Sud') return 'chriqui.yoni@gmail.com'
  else if (value == '2B Haute-Corse') return 'chriqui.yoni@gmail.com'
  else if (value == "21 Côte-d'Or") return 'chriqui.yoni@gmail.com'
  else if (value == "22 Côtes d'Armor") return 'chriqui.yoni@gmail.com'
  else if (value == '23 Creuse') return 'chriqui.yoni@gmail.com'
  else if (value == '24 Dordogne') return 'chriqui.yoni@gmail.com'
  else if (value == '25 Doubs') return 'chriqui.yoni@gmail.com'
  else if (value == '26 Drôme') return 'chriqui.yoni@gmail.com'
  else if (value == '27 Eure') return 'chriqui.yoni@gmail.com'
  else if (value == '28 Eure-et-Loir') return 'cpamtaxiconventionne@gmail.com'
  else if (value == '29 Finistère') return 'cpamtaxiconventionne@gmail.com'
  else if (value == '30 Gard') return 'chriqui.yoni@gmail.com'
  else if (value == '31 Haute-Garonne') return 'chriqui.yoni@gmail.com'
  else if (value == '32 Gers') return 'chriqui.yoni@gmail.com'
  else if (value == '33 Gironde') return 'chriqui.yoni@gmail.com'
  else if (value == '34 Hérault') return 'chriqui.yoni@gmail.com'
  else if (value == '35 Ille-et-Vilaine') return 'chriqui.yoni@gmail.com'
  else if (value == '36 Indre') return 'chriqui.yoni@gmail.com'
  else if (value == '37 Indre-et-Loire') return 'chriqui.yoni@gmail.com'
  else if (value == '38 Isère') return 'chriqui.yoni@gmail.com'
  else if (value == '39 Jura') return 'chriqui.yoni@gmail.com'
  else if (value == '40 Landes') return 'chriqui.yoni@gmail.com'
  else if (value == '41 Loir-et-Cher') return 'chriqui.yoni@gmail.com'
  else if (value == '42 Loire') return 'chriqui.yoni@gmail.com'
  else if (value == '43 Haute-Loire') return 'chriqui.yoni@gmail.com'
  else if (value == '44 Loire-Atlantique') return 'chriqui.yoni@gmail.com'
  else if (value == '45 Loiret') return 'chriqui.yoni@gmail.com'
  else if (value == '46 Lot') return 'cpamtaxiconventionne@gmail.com'
  else if (value == '47 Lot-et-Garonne') return 'chriqui.yoni@gmail.com'
  else if (value == '48 Lozère') return 'chriqui.yoni@gmail.com'
  else if (value == '49 Maine-et-Loire') return 'chriqui.yoni@gmail.com'
  else if (value == '50 Manche') return 'chriqui.yoni@gmail.com'
  else if (value == '51 Marne') return 'chriqui.yoni@gmail.com'
  else if (value == '52 Haute-Marne') return 'cpamtaxiconventionne@gmail.com'
  else if (value == '53 Mayenne Laval') return 'chriqui.yoni@gmail.com'
  else if (value == '54 Meurthe-et-Moselle') return 'chriqui.yoni@gmail.com'
  else if (value == '55 Meuse') return 'chriqui.yoni@gmail.com'
  else if (value == '56 Morbihan') return 'chriqui.yoni@gmail.com'
  else if (value == '57 Moselle') return 'chriqui.yoni@gmail.com'
  else if (value == '58 Nièvre') return 'chriqui.yoni@gmail.com'
  else if (value == '59 Nord') return 'chriqui.yoni@gmail.com'
  else if (value == '60 Oise') return 'chriqui.yoni@gmail.com'
  else if (value == '61 Orne') return 'chriqui.yoni@gmail.com'
  else if (value == '62 Pas-de-Calais') return 'chriqui.yoni@gmail.com'
  else if (value == '63 Puy-de-Dôme') return 'chriqui.yoni@gmail.com'
  else if (value == '64 Pyrénées-Atlantiques') return 'chriqui.yoni@gmail.com'
  else if (value == '65 Hautes-Pyrénées') return 'chriqui.yoni@gmail.com'
  else if (value == '66 Pyrénées-Orientales') return 'chriqui.yoni@gmail.com'
  else if (value == '67 Bas-Rhin') return 'chriqui.yoni@gmail.com'
  else if (value == '68 Haut-Rhin') return 'chriqui.yoni@gmail.com'
  else if (value == '69 Rhône') return 'chriqui.yoni@gmail.com'
  else if (value == '70 Haute-Saône') return 'chriqui.yoni@gmail.com'
  else if (value == '71 Saône-et-Loire') return 'chriqui.yoni@gmail.com'
  else if (value == '72 Sarthe') return 'chriqui.yoni@gmail.com'
  else if (value == '73 Savoie') return 'chriqui.yoni@gmail.com'
  else if (value == '74 Haute-Savoie') return 'chriqui.yoni@gmail.com'
  else if (value == '75 Paris') return 'chriqui.yoni@gmail.com'
  else if (value == '76 Seine-Maritime') return 'chriqui.yoni@gmail.com'
  else if (value == '77 Seine-et-Marne') return 'chriqui.yoni@gmail.com'
  else if (value == '78 Yvelines') return 'chriqui.yoni@gmail.com'
  else if (value == '79 Deux-Sèvres') return 'chriqui.yoni@gmail.com'
  else if (value == '80 Somme') return 'chriqui.yoni@gmail.com'
  else if (value == '81 Tarn') return 'chriqui.yoni@gmail.com'
  else if (value == '82 Tarn-et-Garonne') return 'chriqui.yoni@gmail.com'
  else if (value == '83 Var') return 'chriqui.yoni@gmail.com'
  else if (value == '84 Vaucluse') return 'chriqui.yoni@gmail.com'
  else if (value == '85 Vendée') return 'chriqui.yoni@gmail.com'
  else if (value == '86 Vienne') return 'chriqui.yoni@gmail.com'
  else if (value == '93 Seine-Saint-Denis') return 'chriqui.yoni@gmail.com'
  else if (value == '94 Val-de-Marne') return 'chriqui.yoni@gmail.com'
  else if (value == '95 Val-d’Oise') return 'chriqui.yoni@gmail.com'
  else if (value == '87 Haute-Vienne') return 'chriqui.yoni@gmail.com'
  else if (value == '88 Vosges') return 'chriqui.yoni@gmail.com'
  else if (value == '89 Yonne') return 'chriqui.yoni@gmail.com'
  else if (value == '90 Territoire-de-Belfort') return 'chriqui.yoni@gmail.com'
  else if (value == '91 Essonne') return 'chriqui.yoni@gmail.com'
  else if (value == '92 Hauts-de-Seine') return 'chriqui.yoni@gmail.com'
  else if (value == '93 Seine-Saint-Denis') return 'chriqui.yoni@gmail.com'
  else if (value == '94 Val-de-Marne') return 'daniel@mon-taxi-conventionne.fr'
  else if (value == "95 Val-d'Oise") return 'cpamtaxiconventionne@gmail.com'

  // (141, '93 Seine-Saint-Denis', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (142, '94 Val-de-Marne', 'daniel@mon-taxi-conventionne.fr ', '2020-01-01'),
  // (143, '95 Val-d\'Oise', 'cpamtaxiconventionne@gmail.com', '2020-01-01');

  // (1, '01 Ain', 'chriqui.yoni@gmail.com', '20'),
  // (2, '02 Aisne', 'cpamtaxiconventionne@gmail.com', '),
  // (3, '03 Allier', 'chriqui.yoni@gmail.com', '),
  // (4, '04 Alpes de Hautes-Provence', 'cpamtaxiconventionne@gmail.com', '),
  // (5, '05 Hautes-Alpes', 'chriqui.yoni@gmail.com', '),
  // (6, '06 Alpes-Maritimes', 'chriqui.yoni@gmail.com', '),
  // (7, '07 ArdÃ¨che', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (8, '08 Ardennes', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (9, '09 AriÃ¨ge', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (10, '10 Aube', 'cpamtaxiconventionne@gmail.com', '2020-01-01'),
  // (11, '11 Aude', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (12, '12 Aveyron', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (13, '13 Bouches-du-RhÃ´ne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (14, '14 Calvados', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (15, '15 Cantal', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (16, '16 Charente', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (17, '17 Charente-Maritime', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (18, '18 Cher', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (19, '19 CorrÃ¨ze', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (20, '2A Corse-du-Sud', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (21, '2B Haute-Corse', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (22, '21 CÃ´te-d\'Or', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (23, '22 CÃ´tes d\'Armor', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (24, '23 Creuse', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (25, '24 Dordogne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (26, '25 Doubs', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (27, '26 DrÃ´me', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (28, '27 Eure', 'cpamtaxiconventionne@gmail.com', '2020-01-01'),
  // (29, '28 Eure-et-Loir', 'cpamtaxiconventionne@gmail.com', '2020-01-01'),
  // (30, '29 FinistÃ¨re', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (31, '30 Gard', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (32, '31 Haute-Garonne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (33, '32 Gers', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (34, '33 Gironde', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (35, '34 HÃ©rault', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (36, '35 Ille-et-Vilaine', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (37, '36 Indre', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (38, '37 Indre-et-Loire', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (39, '38 IsÃ¨re', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (40, '39 Jura', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (41, '40 Landes', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (42, '41 Loir-et-Cher', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (43, '42 Loire', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (44, '43 Haute-Loire', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (45, '44 Loire-Atlantique', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (46, '45 Loiret', 'cpamtaxiconventionne@gmail.com', '2020-01-01'),
  // (47, '46 Lot', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (48, '47 Lot-et-Garonne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (49, '48 LozÃ¨re', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (50, '49 Maine-et-Loire', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (51, '50 Manche', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (52, '51 Marne', 'cpamtaxiconventionne@gmail.com', '2020-01-01'),
  // (53, '52 Haute-Marne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (101, '53 Mayenne Laval', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (102, '54 Meurthe-et-Moselle', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (103, '55 Meuse', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (104, '56 Morbihan', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (105, '57 Moselle', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (106, '58 NiÃ¨vre', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (107, '59 Nord', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (108, '60 Oise', 'cpamtaxiconventionne@gmail.com', '2020-01-01'),
  // (109, '61 Orne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (110, '62 Pas-de-Calais', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (111, '63 Puy-de-DÃ´me', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (112, '64 PyrÃ©nÃ©es-Atlantiques', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (113, '65 Hautes-PyrÃ©nÃ©es', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (114, '66 PyrÃ©nÃ©es-Orientales', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (115, '67 Bas-Rhin', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (116, '68 Haut-Rhin', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (117, '69 RhÃ´ne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (118, '70 Haute-SaÃ´ne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (119, '71 SaÃ´ne-et-Loire', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (120, '72 Sarthe', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (121, '73 Savoie', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (122, '74 Haute-Savoie', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (123, '75 Paris', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (124, '76 Seine-Maritime', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (125, '77 Seine-et-Marne', '77.taxi.conventionne@gmail.com', '2020-01-01'),
  // (126, '78 Yvelines', 'cpamtaxiconventionne@gmail.com', '2020-01-01'),
  // (127, '79 Deux-SÃ¨vres', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (128, '80 Somme', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (129, '81 Tarn', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (130, '82 Tarn-et-Garonne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (131, '83 Var', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (132, '84 Vaucluse', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (133, '85 VendÃ©e', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (134, '86 Vienne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (135, '87 Haute-Vienne', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (136, '88 Vosges', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (137, '89 Yonne', 'cpamtaxiconventionne@gmail.com', '2020-01-01'),
  // (138, '90 Territoire-de-Belfort', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (139, '91 Essonne Ã‰vry', 'daniel@mon-taxi-conventionne.fr', '2020-01-01'),
  // // (140, '92 Hauts-de-Seine', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (141, '93 Seine-Saint-Denis', 'chriqui.yoni@gmail.com', '2020-01-01'),
  // (142, '94 Val-de-Marne', 'daniel@mon-taxi-conventionne.fr ', '2020-01-01'),
  // (143, '95 Val-d\'Oise', 'cpamtaxiconventionne@gmail.com', '2020-01-01');
}

const sub = document.querySelector('#submit')
sub.addEventListener('click', (e) => {
  e.preventDefault()
    // console.log('sub')
  submit()
})
const cpam = () => {
  if (inlineRadio1) return inlineRadio1.value
  if (inlineRadio2) return inlineRadio2.value
}
const trans = () => {
  if (inlineRadio3) return inlineRadio3.value
  if (inlineRadio4) return inlineRadio4.value
  if (inlineRadio5) return inlineRadio5.value
}
const body = {
  'department-name': depart_name.value,
  name: form.yourname.value,
  email: email_add.value,
  telephone: tele_no.value,
  adresse: adresse.value,
  postcode: postcode.value,
  city: city.value,
  destination: dest.value,
  'date of departure': dp1598335005261.value,
  'departure timeset': timeset.value,
  'social security number': snum,
  'CPAM support': cpam(),
  'BON DE TRANSPORT': trans(),
  'Furthur information': infos ? infos : 'Not Provided',
}

// const send = JSON.stringify(body)
function sendEmail() {
  // console.log(form.depart_name.value)
  if (
    (form.depart_name.value =
      0 ||
      form.email_add.value == '' ||
      form.adresse.value == '' ||
      form.postcode == '')
    // || city,
    // dest,
    // snum,
  ) {
    alert('Please fill the required fields')
    return
  } else if (form.depart_name.value.lenght != 0) {
    //   console.log('2')
    Email.send({
      Host: 'smtp.gmail.com',
      Username: 'kirankumargs23.kkgs@gmail.com',
      Password: '9743314881',
      To: depart(depart_name.value),
      From: 'kirankumargs23.kkgs@gmail.com',
      Subject: 'This is the data',
      Body: body,
    }).then((message) => alert('Your request is Successful'))
  }
}

//     const request = async(name) => {

//         const rawResponse = await fetch('http://localhost:5000', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({name})
//         });
//         // const content = await rawResponse.json();

//         // console.log(content);
// }

// request(form.your-name.value)
