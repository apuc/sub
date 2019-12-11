<h1 class="h1">{$h1}</h1>

<div>
    {if !empty($model)}
        <p>Домен: {$model->name}</p>
        <p>Регион: {$model->region}</p>
        <p>Телефон: {$model->phone}</p>
    {else}
        <p>Такого домена не существует</p>
    {/if}
</div>