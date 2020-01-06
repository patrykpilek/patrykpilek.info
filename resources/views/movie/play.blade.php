@push('scripts')
    <script type="text/javascript">

        document.addEventListener('play', function (e) {
            let videos = document.getElementsByTagName('video');
            for (let i = 0, len = videos.length; i < len; i++) {
                if (videos[i] !== e.target) {
                    videos[i].pause();
                }
            }
        }, true);

    </script>
@endpush
