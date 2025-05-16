window.addEventListener('load', function() {
    
    const BtnObtener = document.getElementById('BtnObtener');
    const memeContainer = document.getElementById('meme-container');
    
    BtnObtener.addEventListener('click', async function() {
        try {
            const apiUrl = 'https://api.imgflip.com/get_memes';
            
            // Realizar la petición fetch
            const response = await fetch(apiUrl);
            
            // Convertir la respuesta a JSON
            const data = await response.json();
            
            // Verificar si la petición fue exitosa
            if (data.success) {
                // Obtener un meme aleatorio
                const memes = data.data.memes;
                const randomMeme = memes[Math.floor(Math.random() * memes.length)];
                
                // Crear elemento de imagen
                const memeHtml = `
                    <div class="card mt-3">
                        <img src="${randomMeme.url}" class="card-img-top" alt="${randomMeme.name}">
                        <div class="card-body">
                            <h5 class="card-title">${randomMeme.name}</h5>
                        </div>
                    </div>
                `;
                
                // Mostrar el meme en el contenedor
                memeContainer.innerHTML = memeHtml;
            } else {
                throw new Error('Error al obtener memes');
            }
        } catch (error) {
            console.error('Error:', error);
            memeContainer.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Error al cargar el meme. Por favor, intenta de nuevo.
                </div>
            `;
        }
    });
});