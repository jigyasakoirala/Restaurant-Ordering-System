document.addEventListener("DOMContentLoaded", function(){

    const search = document.getElementById("searchFood");

    if(search){

        search.addEventListener("keyup", function(){

            let value = this.value.toLowerCase();

            let cards = document.querySelectorAll(".food-card");

            cards.forEach(function(card){

                card.style.display =
                    card.innerText.toLowerCase().includes(value)
                    ? "block"
                    : "none";

            });

        });

    }

});