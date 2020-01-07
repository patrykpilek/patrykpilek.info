@push('scripts')
    <script type="text/javascript">

        // For adding the token to axios header (add this only one time).
        let token = document.head.querySelector('meta[name="csrf-token"]');
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

        document.addEventListener('play', function (e) {
            let videos = document.getElementsByTagName('video');

            for (let i = 0, len = videos.length; i < len; i++) {
                if(videos[i] === e.target) {
                    // console.log('Video URL: ' + videos.item(i).currentSrc );

                    window.axios.post('/increaseViewVideo',{
                        videoUrl: videos.item(i).currentSrc,
                    }).then((response)=> {
                        console.log(response.data)
                    }).catch((error)=> {
                        console.log(error.response.data)
                    });
                }

                if (videos[i] !== e.target) {
                    videos[i].pause();
                }
            }
        }, true);

    </script>
@endpush
