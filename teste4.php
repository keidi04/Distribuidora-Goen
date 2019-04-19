select p.*, c.categoria, tipoVolume.volume as volume from produtos as p 
join categorias as c on p.categoria_id = c.id
join tiposdevolume as tipoVolume on p.tipoDeVolume_id = tipoVolume.id


pedido
 - idCliente
 - status
 - dataCriacao



itemsDoPedido
- idProduto
- idPedido
- Valor
- quantidade


