<article class="addUserArticle">
    <h1>Ajouter un produit</h1>
    <div class="contentUserAdd">
        <form action="" method="" enctype="">
            <label for="nameAddProduct">Nom :</label>
            <input  type="text" name="nameAddProduct" id="nameAddProduct" value=""/>

            <label for="categoryAddProduct">Catégories :</label>
            <select name="categoryAddProduct" id="categoryAddProduct">
                <option value="Harry Potter">Harry Potter</option>
                <option value="Disney">Disney</option>
            </select>

            <label for="DescrProductAdd">Description :</label>
            <textarea id="DescrProductAdd" name="DescrProductAdd"></textarea>

            <label for="priceAddProduct">Prix :</label>
            <input  type="text" name="priceAddProduct" id="priceAddProduct" value=""/>

            <label for="quantityAddProduct">Quantité :</label>
            <input  type="text" name="quantityAddProduct" id="quantityAddProduct" value=""/>

            <label for="activateAddProduct">Activé</label>
            <input type="checkbox" id="activateAddProduct" name="activateAddProduct"
                   checked>

            <a class="imagesProductDetails" type="button" href="productImages.php">Images</a>

            <input type="submit" value="Enregistrer" />

        </form>
    </div>
</article>