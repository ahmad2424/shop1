<script>

    @if( session('Swal') )
    Swal.fire({

        'icon':`{{ session('Swal')['success']}}`  ,
        'title': `{{ session('Swal')['title'] }}` ,
        'text': `{{ session('Swal')['text'] }}` ,

    });

    {{session()->forget('Swal') }}

    @endif

</script>
