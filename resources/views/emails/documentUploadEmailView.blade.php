<!DOCTYPE html>
<html>

<body>

    <p>
        @if (count($emailData['arrayDocumentNames']) === 1)
        Se ha publicado en la ruta <b>{{ $emailData['concatCategories'] }}</b> el siguiente documento
        @elseif (count($emailData['arrayDocumentNames']) > 1)
        Se han publicado en la ruta <b>{{ $emailData['concatCategories'] }}</b> los siguientes documentos
        @endif
    <ol>
        @foreach ($emailData['arrayDocumentNames'] as $document)
        <li>{{ $document }}</li>
        @endforeach
    </ol>
    </p>

</body>

</html>