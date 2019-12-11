<h1 class="h1">{$h1}</h1>

<a href="/add-form">Добавить</a>
<table>
    <tr>
        <th>Домен</th>
        <th>Регион</th>
        <th>Телефон</th>
        <th></th>
    </tr>
    {foreach from=$model item=item}
        <tr>
            <td>{$item->name}</td>
            <td>{$item->region}</td>
            <td>{$item->phone}</td>
            <td><a href="/del-dom/{$item->id}">Del</a></td>
        </tr>
    {/foreach}
</table>