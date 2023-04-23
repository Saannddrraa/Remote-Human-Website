const product = [
    {
        id: 0,
        image: "src/img/rh-t-shirt.jpeg",
        title: "RH T-shirt",
        price: 21.99,
    },
      {
        id: 1,
        image: "src/img/rh-hoody.jpeg",
        title: "RH Hoody",
        price: 33.99,
      },
      {
        id: 2,
        image: "src/img/rh-polo.jpeg",
        title: "RH polo T-shirt",
        price: 24.99,
      },
      {
        id: 3,
        image: "src/img/rh-cup.png",
        title: "RH cup",
        price: 15.50,
      },
      {
        id: 4,
        image: "src/img/hat-beanie.png",
        title: "RH Beanie",
        price: 15.50,
      },
      {
        id: 5,
        image: "src/img/rh-hat.png",
        title: "RH hat",
        price: 17.50,
      }
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box d-flex justify-content-center'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <p>$ ${price}</p>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}

function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ "+0+"";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+"";
            return(
                `<div class='cart-item d-flex align-items-center justify-content-between'>
                <div class='row-img d-flex align-items-center justify-content-center'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <p style='font-size: 15px;'>$ ${price}</p>`+
                "<i class='fa fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }  
}
