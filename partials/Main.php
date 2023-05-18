<main>
    <h1 class="text-center py-3">Pet Shop</h1>
    <div class="container py-3">
        <div class="row row-cols-3">
            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="col g-4">
                    <div class="card p-3">
                        <div class="figure text-center">
                            <img src="<?php echo $prodotto->img; ?>" class="card-img-top" alt="Pet">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Prodotto: <?php echo $prodotto->name; ?></h2>
                            <p class="card-text m-0">Descrizione: <span><?php echo $prodotto->description; ?></span></p>
                            <p class="card-text m-0">Quantità: <span><?php echo $prodotto->quantity; ?></span></p>
                            <p class="card-text m-0">Prezzo: <span>€<?php echo $prodotto->price; ?></span></p>
                            <p class="card-text m-0">Categoria: <span><?php echo $prodotto->category->category; ?></span></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>