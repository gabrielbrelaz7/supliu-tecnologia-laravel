    
    function addFaixa(albumId){

            $(`.add-faixa-${albumId}`).html('');

                const html = 
                    `
                    <div class="form-group">
                        <label for="faixa">N° Faixa</label>
                        <input type="number" name="faixa" class="form-control" placeholder="Número da faixa" required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome da faixa</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome da faixa" required>
                    </div>
                    <div class="form-group">
                        <label for="duracao">Duração da faixa</label>
                        <input type="text" id="duracao" name="duracao" class="form-control" placeholder="Minutos : Segundos" required>
                    </div>
                    
                    <input type="submit" class="btn btn-dark btn-sm" value="Cadastrar Faixa">
                    `;

                    $(`.add-faixa-${albumId}`).append(html);

                    $('#duracao').mask('0:00');
        }



    function addAlbum(){

        $(`.add-album`).html('');

            const html = 
                `
                <div class="form-album">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do Álbum" required>
                    </div>
                    <div class="form-group">
                        <label for="ano">Ano</label>
                        <input type="text" id="ano" name="ano" class="form-control" placeholder="Ano de lançamento do álbum" required>
                    </div>
                    
                    <input type="submit" class="btn btn-dark" value="Cadastrar Álbum">
                </div>
                `;

               $(`.add-album`).append(html);

               $('#ano').mask('0000');

    }
