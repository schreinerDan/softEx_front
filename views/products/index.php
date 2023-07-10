
    <h1>Lista de Produtos</h1>

    <ul>
        
        <?php foreach ($products as $product): ?>
            <li><?php echo $product->name ?> - R$ <?php echo $product->price; ?></li>
        <?php endforeach; ?>
    </ul>

 