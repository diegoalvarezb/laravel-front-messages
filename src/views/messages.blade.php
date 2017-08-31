@foreach (['info', 'success', 'warning', 'danger'] as $messageType)

    @if (isset($front_messages[$messageType]) and (count($front_messages[$messageType]) > 0))

        <div id="messages-{{ $messageType }}" class="alert alert-{{ $messageType }} alert-dismissible fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

            @if ($messageType == 'danger')
                <h4><i class="icon fa fa-ban"></i> Hey!</h4>
            @elseif ($messageType == 'info')
                <h4><i class="icon fa fa-info"></i> Hey!</h4>
            @elseif ($messageType == 'warning')
                <h4><i class="icon fa fa-warning"></i> Hey!</h4>
            @elseif ($messageType == 'succes')
                <h4><i class="icon fa fa-check"></i> Hey!</h4>
            @endif

            @foreach ($front_messages[$messageType] as $message)
                <p>{{ $message }}</p>
            @endforeach
        </div>

    @endif

@endforeach