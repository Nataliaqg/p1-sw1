<div>
    <script src="{{ asset('js/face-api.min.js') }}" type="text/javascript"></script>
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('face-api', function(usuarios, photography) {
                console.log("recognize:", usuarios)
                console.log("image:", photography)
                //cargo los modelos de FACEAPI cuanndo la funcion start comience
                Promise.all([
                    faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
                    faceapi.nets.faceLandmark68Net.loadFromUri('/models'),
                    faceapi.nets.ssdMobilenetv1.loadFromUri('/models'),
                    console.log("loaded models faceid")
                ]).then(start)

                function loadLabeledImages() {
                    return Promise.all(
                        usuarios.map(async user => {
                            const descriptions = [];
                            const images = user.images;
                            for (let i = 0; i < images.length; i++) {
                                const img = await faceapi.fetchImage(images[i]);
                                const detections = await faceapi.detectSingleFace(img)
                                    .withFaceLandmarks()
                                    .withFaceDescriptor();
                                descriptions.push(detections.descriptor);
                            }
                            return new faceapi.LabeledFaceDescriptors(user.id.toString(),
                                descriptions);
                        })
                    )
                }

                async function start() {

                    //obtengo los id de las caras de las imagenes de los usuarios
                    const labeledFaceDescriptors = await loadLabeledImages();
                    //console.log(labeledFaceDescriptors)

                    //que tenga una presicion arriba de 60%
                    const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6);
                    console.log('Listo');

                    //obtengo la imagen subida en el input
                    const image = await faceapi.fetchImage(photography.url_path);
                    const displaySize = {
                        width: image.width,
                        height: image.height
                    };
                    //detecta todas las caras de la imagagen del input
                    const detections = await faceapi.detectAllFaces(image)
                        .withFaceLandmarks()
                        .withFaceDescriptors();

                    const resizedDetections = faceapi.resizeResults(detections,
                        displaySize);

                    //las coincidencias
                    const results = resizedDetections.map(d => faceMatcher
                        .findBestMatch(d
                            .descriptor));

                    idusuarios = []
                    for (j = 0; j < results.length; j++) {
                        idusuarios.push(results[j].label);
                    };
                    console.log(idusuarios);
                    Livewire.emit('setNotifications', idusuarios, photography.id);
                }

            });
        });
    </script>
</div>
