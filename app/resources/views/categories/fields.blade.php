<div class="form-group">
{!! Form::input('text', 'name', $category->name,  ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Nombre de la Categoria']) !!}
</div>
<div class="actions pull-right">
{!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
