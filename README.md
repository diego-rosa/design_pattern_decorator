<h1>Decorator</h1>
    <hr>
    <br>
    <p>O padrão estrutural Decorator busca permitir a adição de 
       um comportamento adicional a um objeto de maneira dinâmica, ou seja, <br>
       em tempo de execução. Sem afetar o comportamento de outros objetos da mesma classe.
    </p>
    <br>
    <h2>Qual problema ele resolve?</h2>
    <hr>
    <br>
    <p>* Responsabilidades que devem ser adicionadas (e removidas) de um objeto dinamicamente em tempo de execução.</p>
    <br>
    <h2>Solução</h2>
    <hr>
    <br>
    <p>* Uma alternativa flexível à subclasse para estender a funcionalidade deve ser fornecida.</p>
    <p>* Implementa a interface do objeto estendido (decorado) ( Component) de forma transparente, encaminhando todas as solicitações para ele</p>
    <p>* Utiliza a Agregação e composição ao invés da herança</p>
    <br>
    <h2>Aplicabilidade</h2>
    <hr>
    <br>
    <p>
        * Utilize o padrão Decorator quando você precisa ser capaz de projetar comportamentos adicionais<br>
        para objetos em tempo de execução sem quebrar o código que usa esses objetos.
    </p>
    <p> 
        * O Decorator lhe permite estruturar sua lógica de negócio em camadas, criar um decorador para cada<br> 
        camada, e compor objetos com várias combinações dessa lógica durante a execução
    </p>
    <p> * Utilize o padrão quando é complicado ou impossível estender o comportamento de um objeto usando herança.</p>
    <br>
    <h2>Vantagens</h2>
    <hr>
    <br>
    <p>* Facilidade em adicionar ou remover comportamentos de objetos sem tocar no código já escrito ou testado.</p>
    <p>* É possível decorar um objeto já decorado, adicionando ainda mais funcionalidades(Camadas).</p>
    <br>
    <h2>Desvantagens</h2>
    <hr>
    <br>
    <p>* Quanto mais Decorators em camadas, mais complexo seu código se torna.</p>
    <br>
    <h2>Referências</h2>
    <br>
    <p>https://en.wikipedia.org/wiki/Decorator_pattern</p>
    <p>https://refactoring.guru/pt-br/design-patterns/decorator</p>
    <p>https://www.devmedia.com.br/design-patterns-implementando-os-padroes-decorator-e-singleton/24075</p>
    <br>
    <h2>Link da gravação sobre o Design Pattern Decorator</h2>
    <p>https://drive.google.com/drive/folders/12CK9ebSPLAZmes3SMXSif8xzU0QMmz8f</p>
   
