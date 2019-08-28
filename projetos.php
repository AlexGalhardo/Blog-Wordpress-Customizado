<?php
// Template Name: Projetos
?>

<?php get_header(); ?>

    <main role="main container col-lg-8">

      <br><br><br>

      <div class="album py-5">

        <div class="container col-lg-8">

          <div class="row">

            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
                <div>
                  <h5 class="post-title"><?php the_field('titulo_do_projeto'); ?></h5>
                </div>
                <div class="card-body">
                  <p><?php the_field('resumo_do_projeto'); ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php the_field('preview_do_projeto'); ?>"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="<?php the_field('githubcode_do_projeto'); ?>"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small style="color: red;"><strong><?php the_field('desenvolvendo_concluido'); ?></strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>
            

            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Arquivei Quiz</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto desenvolvido para o processo seletivo de estágio em FrontEnd na empresa arquivei.com.br. Foi usado VueJS com o conceito de components para a realização do mesmo. Não me orgulho muito do código que desenvolvi na época, muito porque foi baseado em outro projeto desenvolvido na Udemy, mas gostei bastante do resultado final 😃</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://arquiveiquiz.alexgalhardo.com/"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="https://github.com/AlexGalhardo/Galhardo-RPG"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small style="color: green;"><strong><strong>Concluído</strong></strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>
            

            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo Web RPG</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Desenvolvendo um joguinho simples com o intuito de aprender vanilla JavaScript & ES6+, simulando o jogo da versão Python para o navegador, usando melhores práticas como ESLint, localCache, NodeJS e muita manipulação do DOM . Muito bom para se divertir nas horas vagas também 😆</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://rpg.alexgalhardo.com"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="https://github.com/AlexGalhardo/Galhardo-RPG/tree/master/Web"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small style="color: red;"><strong>Desenvolvendo...</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>



            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo ERP</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Desenvolvendo um sisteminha de ERP simples, para administrar um pequeno comércio, usando login, operações CRUD simples com PHP7 e MySQL, além de operações AJAX e uso do Bootstrap no Front-End 💸</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: red;"><strong>Desenvolvendo...</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo Social</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto desenvolvido durante o curso da b7web.com.br, simulando uma pequena rede social baseado no Facebook, com upload de arquivos, feed de postagens, relações de amizades, sistema de login, usando estrutura MVC, PHP e MySQL.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="http://social.alexgalhardo.com"><button type="button" class="btn btn-sm btn-outline-warning">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: red;"><strong>Desenvolvendo...</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>



            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo ERP</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Desenvolvendo um sisteminha de ERP simples, para administrar um pequeno comércio, usando login, operações CRUD simples com PHP7 e MySQL, além de operações AJAX e uso do Bootstrap no Front-End 💸</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: red;"><strong>Desenvolvendo...</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            
            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo ToDo JS</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto clássico de ToDO com JS no navegador, desenvolvido durante um curso da Udemy. 🎯</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://todojs.alexgalhardo.com"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: green;"><strong><strong>Concluído</strong></strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo NodeJS API</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Desenvolvendo uma API para o site, desenvolvido com NodeJS e MongoDB para responder requisições de api REST & RESTfull.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: red;"><strong><strong>Desenvolvendo</strong></strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>



            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo Twitter</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto desenvolvido durante o curso da b7web.com.br, simulando uma pequena rede social baseado no Twitter, com feed de postagens, relações de amizades, sistema de login, usando estrutura MVC, PHP e MySQL.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: red;"><strong>Desenvolvendo...</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>



            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo PHP WebService</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Desenvolvendo um WebService para o site, desenvolvido com PHP e MySQL para responder requisições de api REST & RESTfull.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: red;"><strong><strong>Desenvolvendo</strong></strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo ToDo JS</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto clássico de ToDO com JS no navegador, desenvolvido durante um curso da Udemy. 🎯</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://todojs.alexgalhardo.com"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: green;"><strong><strong>Concluído</strong></strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo Bank</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Desenvolvendo um projetinho simples com operações básicas de CRUD e login com PHP7 e MySQL, simulando um banco, para estudos pessoais de economia e investimentos 🎯</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: red;"><strong>Desenvolvendo...</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">TAD Biblioteca</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto desenvolvido na linguagem C para a matéria de Estrutura de Dados I no ICMC USP, criando um sisteminha simples via linha de comando para a manipulação de livros dentro de uma biblioteca, usando as operações básicas de CRUD 😃</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="https://github.com/AlexGalhardo/USP-Library-TAD"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: green;"><strong>Concluído</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Tree Sorting</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto desenvolvido na linguagem C para a matéria de Estrutura de Dados I no ICMC USP, criando um sisteminha simples via linha de comando para ordenar alguns dados em algumas estruturas de dados de árvores 😃</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="https://github.com/AlexGalhardo/USP-Tree-Sorting"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: green;"><strong>Concluído</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Sorting Files</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto desenvolvido na linguagem C para a matéria de Estrutura de Dados I no ICMC USP, para organizar alguns dados dentro de arquivos 😃</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="https://github.com/AlexGalhardo/USP-Sorting-Files"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: green;"><strong>Concluído</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Galhardo OLX</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto desenvolvido durante o curso da b7web.com.br, simulando um classificados bem simples como da OLX com PHP e MySQL 😃</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="https://github.com/AlexGalhardo/Galhardo-OLX"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: green;"><strong>Concluído</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


            <div class="container col-lg-2"></div>
            <div class="col-lg-8">
              <br><br><br>
                <div>
                  <h5 class="post-title">Hackathon ComuniCode Madre Cabrini</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Projeto desenvolvido durante um hackaton realizado pela MonitoraTec com o objetivo de desenvolver um site que ajude a arrecadar fundos para a instituição de caridade MadreCabrini 😃</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://comunicode.alexgalhardo.com"><button type="button" class="btn btn-sm btn-outline-warning shadow">Preview</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="https://github.com/AlexGalhardo/Galhardo-OLX"><button type="button" class="btn btn-sm btn-outline-primary shadow">GitHub Code</button></a>
                    </div>
                    <small class="" style="color: green;"><strong>Concluído</strong></small>
                  </div>
                </div>
            </div>
            <div class="container col-lg-2"></div>


          </div>
        </div>
      </div>

    </main>


<?php get_footer(); ?>

