<!DOCTYPE html>
<html>
    <head>
    
        <title>Sistema de Gerenciamento de Bolsas Estudantis</title>
        <meta charset="UTF-8">
        <link href="css/estilos.css" rel="stylesheet" type="text/css" >
        <script language="JavaScript" src="scripts/jScripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="scripts/suave.js" type="text/javascript"></script>
        <script src="scripts/subir.js" type="text/javascript"></script>
        </head>
    <body onload="javascript:exibeDataHora('hora');">
        <div id="subir">
               <a href="#out">Subir</a>
        </div>
        
        <header>
            <a name="subir"></a>
         <div class="navegacao">
             <nav class="fixar"> 
                 <ul>
                     <li><a href="#oqe">O que é?</a></li>
                    <li><a href="#cf">Como funciona?</a></li>
                    <li><a href="#preco">Quanto custa?</a></li>
                    <li><a href="#termo">Funcionalidades</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="sistema/">ÁREA RESTRITA</a></li>                  
                    <li><div id="dataMenu"><div id="hora"></div></div></li>
                 </ul>
             </nav>
         </div> 
        </header>

       <section id="principal">
           <div id="logomarca"> <img src="imagens/logo-principal.png" alt=""/><br>
                  
           <br><br>#maisSimples  #maisRapido  #maisTransparente</div>
           
       </section>
        <section id="destaque-oqe">
            <a name="oqe"></a>
            <br>
            <h1>O que é?</h1>
            <center>
                <div id="caixaTexto"><p> Todos os anos milhares de estudantes recebem bolsas para ajudarem na permanência
                dos seus estudos. Essas bolsas são fornecidades por diferentes instituições de 
                ensino todos os estados brasileiros. Com isso surge um problema: como gerir todas
                as informações garantido a lisura e agilidade no processo?</p></div>
                
            <div id="caixaTexto"><p> Pensando nisso desenvolvemos o gBe (Gerenciador de Bolsas Estudantis). Essa ferramenta
                100% online é capaz de facilitar o processo de criação de editais, validação de dados,
                cálculo de benefícios e acompanhamento. Tudo isso pela internet.</div>
                
                <div id="caixaTexto"><p> De modo muito intuitivo, o gBe permite à escolas e universidades
                públicas e privadas gerirem todo o processo com baixo custo (as vezes gratuitamente) 
                e ainda contar com um suporte ativo, flexível e prático.</div>
            </p>
            
            <a class="botao" href="#termo">CONFIRA AS FUNCIONALIDADES</a>
            </center>
 
        </section>
        <section id="destaque-cf">
            <a name="cf" id="rolar"></a>
            <br>
            <h1>Como funciona?</h1>
             <center>
                 <div id="caixaTextoCf"> <center><img src="imagens/como-funciona1.png" alt=""/></center></div>
                 
                
                 <div id="caixaTextoCf"><p><center><font id="tituloCf">Você e sua equipe contarão com suporte durante todo o processo!</font></center></div>
                
            </center>
            
        </section>
        <section id="destaque-plano">
            <a name="preco"></a>
            <h1>Planos<br></h1>
            <center>
                <div id="caixaTextoCf"> <center><img src="imagens/planos.png" alt=""/></center>
                    <center><a class="botao2" href="#">Contratar</a>                      <a class="botao" href="#">Contratar</a></center>    
            </center>
        </section>
        <section id="destaque-funcionalidade">
            <a name="termo"></a>
            <br>
            <h1>Funcionalidades</h1>
            
            <center><div id=tabela1>
   <div id=cabtab1>
   CÁLCULOS AUTOMÁTICOS
   </div>
   <div id=corpotab1>
   O sistema irá realizar o cálculo de renda e classificar os candidatos automaticamente
   </div>
</div> 
                <br><br>
                            <center><div id=tabela1>
   <div id=cabtab1>
   DOCUMENTAÇÃO ON LINE
   </div>
   <div id=corpotab1>
   Toda a documentação pode ser enviada pelo aluno através da internet.
   </div>
</div> 
                                
                                                <br><br>
                            <center><div id=tabela1>
   <div id=cabtab1>
   Relatórios automatizados
   </div>
   <div id=corpotab1>
   Gere relatórios de seus processos da forma que precisar
   </div>
</div> 
            </center>
            
            
        </section>
         <section id="destaque-contato">
            <a name="contato"></a>
            <center>
                <form name="meu_form">

        <h1>O que deseja saber?</h1>


        <p class="nome">
            <label for="nome">Nome</label>
            <input type="text" id="nomeid" placeholder="Informe seu nome completo" required="required" name="nome" />
            

        </p>
        <p class="fone">
            <label for="fone">Fone</label>
            <input type="text" id="foneid" placeholder="Ex.: (xx) xxx-xxx-xxx" name="fone" />
            

        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" id="emailid" placeholder="Ex.: fulano@email.com" name="email" />
            

        </p>
        <p>

            <textarea placeholder="Mande sua mensagem..."></textarea>
        </p>
        <p class="submit">

            <input type="submit" onclick="Enviar();" value="Enviar" />
        </p>

                </form></center>
            
          
        </section>
        <footer>
            <div class="footer">
                <img src="imagens/logo-footer.png" alt=""/>
                <small><br>#maisSimples >> #maisRapido >> #maisTransparente<br><br>@CopyRight - 2016 - Sistema de Gerenciamento de Bolsas Estudantis - v1.0
                    <br>Termo de uso | Politica de Privacidade | Desenvolvedor</small>
            </div>
            
        </footer>
    </body>

</html>