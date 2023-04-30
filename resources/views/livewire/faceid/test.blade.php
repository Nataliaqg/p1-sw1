<div>
    <input type="file" name="imagen[]" id="imagen">
    <button onclick="start()">test faceid</button>

    <div>
        <h3>Imagen seleccionada:</h3>
        <img id="inputImg" src="" width="300" height="auto">
        <canvas id="overlay" width="300" height="auto"></canvas>
    </div>

    <script src="{{ asset('js/face-api.min.js') }}" type="text/javascript"></script>
    <script>
        const imageUpload = document.getElementById('imagen')

        //cargo los modelos de FACEAPI cuanndo la funcion start comience
        Promise.all([
            faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
            faceapi.nets.faceLandmark68Net.loadFromUri('/models'),
            faceapi.nets.ssdMobilenetv1.loadFromUri('/models'),
            console.log("loaded models faceid")
        ])

        async function loadLabeledImages() {
            const result = [];

            let label = 'Daniel';
            const descriptions = [];
            const img = await faceapi.fetchImage(`/img/daniel.png`);
            const detections = await faceapi.detectSingleFace(img).withFaceLandmarks()
                .withFaceDescriptor();
            descriptions.push(detections.descriptor);

            result.push(new faceapi.LabeledFaceDescriptors(label, descriptions))

            let label2 = 'Natalia';
            const descriptions2 = [];
            const img2 = await faceapi.fetchImage(`/img/natalia.jpg`);
            const detections2 = await faceapi.detectSingleFace(img2).withFaceLandmarks()
                .withFaceDescriptor();
            descriptions2.push(detections2.descriptor);

            result.push(new faceapi.LabeledFaceDescriptors(label2, descriptions2))

            return result;
        }

        async function start() {
            console.log("function start")
            //obtengo los nombres de las caras de las imagenes del servidor
            const labeledFaceDescriptors = await loadLabeledImages();
            console.log(labeledFaceDescriptors);

            //que tenga una presicion arriba de 60%
            const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6);
            console.log(faceMatcher);

            console.log('Listo');

            resultados = [];
            for (i = 0; i < imageUpload.files.length; i++) {
                image = await faceapi.bufferToImage(imageUpload.files[i]);
                const displaySize = {
                    width: image.width,
                    height: image.height
                };
                //detecta todas las caras de la imagagen del input
                const detections = await faceapi.detectAllFaces(image).withFaceLandmarks()
                    .withFaceDescriptors();

                const resizedDetections = faceapi.resizeResults(detections, displaySize);

                //las coincidencias
                const results = resizedDetections.map(d => faceMatcher.findBestMatch(d
                    .descriptor));

                resultados.push(results);

                console.log("resizedDetections", resizedDetections)
                console.log("findBestMatch", results)

                const inputImg = document.getElementById('inputImg');
                inputImg.src = URL.createObjectURL(imageUpload.files[i]);
                const canvas = document.getElementById('overlay');
                const ctx = canvas.getContext('2d');
                canvas.width = image.width;
                canvas.height = image.height;
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(image, 0, 0, canvas.width, canvas.height);

                // // muestra la imagen seleccionada
                // const inputImg = document.getElementById('inputImg');
                // inputImg.src = URL.createObjectURL(imageUpload.files[0]);

                // // dibuja en el canvas
                // const canvas = document.getElementById('overlay');
                // const ctx = canvas.getContext('2d');
                // canvas.width = image.width;
                // canvas.height = image.height;
                // ctx.clearRect(0, 0, canvas.width, canvas.height);
                // ctx.drawImage(image, 0, 0, canvas.width, canvas.height);

                // // dibuja el cuadro alrededor de la cara reconocida
                // resizedDetections.forEach((result, i) => {
                //     const box = result.detection.box;
                //     const drawBox = new faceapi.draw.DrawBox(box, {
                //         label: result.toString()
                //     });
                //     drawBox.draw(canvas);
                // });

            }
            console.log(resultados);

        }
    </script>
</div>
