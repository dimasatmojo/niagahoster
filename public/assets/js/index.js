var hosting = {
    "packages" : [
        {
            "name"      : "Bayi",
            "price"     : "19.900",
            "discount"  : "14.900"
        },
        {
            "name"      : "Pelajar",
            "price"     : "46.900",
            "discount"  : "23.450"
        },
        {
            "name"      : "Personal",
            "price"     : "58.900",
            "discount"  : "38.900"
        },
        {
            "name"      : "Bisnis",
            "price"     : "109.900",
            "discount"  : "65.900"
        }
    ]
}


var html =      '<del>Rp '+hosting.packages[0].price+'</del>';
    html +=         '<h1 class="card-title pricing-card-title">';
    html +=         '<sup class="font-regular currency"><small class="text-muted">Rp</small></sup> ';
    html +=             '<span class="font-bold">'+(hosting.packages[0].discount).substr(0, 2)+'</span>';
    html +=         '<sup class="font-bold currency">'+(hosting.packages[0].discount).substr(-4)+'<small class="text-muted font-regular">/ bln</small></sup>';
    html +=     '</h1>';
    
$('.p-bayi').append(html);

var html =      '<del>Rp '+hosting.packages[1].price+'</del>';
    html +=         '<h1 class="card-title pricing-card-title">';
    html +=         '<sup class="font-regular currency"><small class="text-muted">Rp</small></sup> ';
    html +=             '<span class="font-bold">'+(hosting.packages[1].discount).substr(0, 2)+'</span>';
    html +=         '<sup class="font-bold currency">'+(hosting.packages[1].discount).substr(-4)+'<small class="text-muted font-regular">/ bln</small></sup>';
    html +=     '</h1>';
    
$('.p-pelajar').append(html);

var html =      '<del>Rp '+hosting.packages[2].price+'</del>';
    html +=         '<h1 class="card-title pricing-card-title">';
    html +=         '<sup class="font-regular currency"><small class="text-light">Rp</small></sup> ';
    html +=             '<span class="font-bold">'+(hosting.packages[2].discount).substr(0, 2)+'</span>';
    html +=         '<sup class="font-bold currency">'+(hosting.packages[2].discount).substr(-4)+'<small class="text-light font-regular">/ bln</small></sup>';
    html +=     '</h1>';
    
$('.p-personal').append(html);

var html =      '<del>Rp '+hosting.packages[3].price+'</del>';
    html +=         '<h1 class="card-title pricing-card-title">';
    html +=         '<sup class="font-regular currency"><small class="text-muted">Rp</small></sup> ';
    html +=             '<span class="font-bold">'+(hosting.packages[3].discount).substr(0, 2)+'</span>';
    html +=         '<sup class="font-bold currency">'+(hosting.packages[3].discount).substr(-4)+'<small class="text-muted font-regular">/ bln</small></sup>';
    html +=     '</h1>';
    
$('.p-bisnis').append(html);
					