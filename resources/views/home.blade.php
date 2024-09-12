{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')

@endsection

@section('content')
<div class="container my-5">
    <h1>La Storia delle Ferrovie Italiane</h1>
    <h4>Capitolo 1: Le Origini (1839-1860)</h4>
    <p>
    La storia delle ferrovie italiane inizia nel XIX secolo, con la prima linea ferroviaria che fu inaugurata nel 1839, collegando Napoli a Portici. Questo evento segnò l’inizio di un processo di modernizzazione e industrializzazione del paese. Durante questo periodo, diverse compagnie private iniziarono a costruire linee in tutto il territorio, contribuendo alla diffusione di questo nuovo mezzo di trasporto.
    </p>
    <h4>Capitolo 2: Unificazione e Sviluppo (1861-1900)</h4>
    <p>
        Con l’unificazione d’Italia nel 1861, il governo dovette affrontare l’urgenza di connettere le diverse regioni del paese. Il Piano di costruzione delle ferrovie, noto come "Programma di Ferroviarie Nazionali", portò alla costruzione di un sistema ferroviario unificato. Entro la fine del secolo, l’Italia disponeva di una rete di oltre 9.000 km di linee, facilitando i trasporti e il commercio.
    </p>
    <h4>Capitolo 3: L'Era della Didattica e della Modernizzazione (1900-1930)</h4>
    <p>
        Negli anni del primo Novecento, le ferrovie italiane subirono notevoli cambiamenti tecnologici. L’elettrificazione delle linee e l’introduzione di treni a motore dieselo contribuirono a rendere il trasporto ferroviario più efficiente. Questo periodo fu caratterizzato anche dalla creazione delle Ferrovie dello Stato nel 1905, una società statale che gestiva la maggior parte delle ferrovie nazionali.
    </p>
    <h4>Capitolo 4: La Guerra e il Dopoguerra (1930-1950)</h4>
    <p>
        La Seconda Guerra Mondiale rappresentò un duro colpo per la rete ferroviaria italiana, con molte linee danneggiate o distrutte. Nel dopoguerra, il governo avviò un programma di ricostruzione straordinaria. Durante questo periodo, vennero anche introdotte importanti innovazioni, come i treni espresso e un miglioramento generale dei servizi.
    </p>
    <h4>Capitolo 5: L'Avvento del TGV e la Modernizzazione Incessante (1950-2000)</h4>
    <p>
        Negli anni '60 e '70, l'Italia assistette all’introduzione di treni ad alta velocità, tra cui il famoso convoglio "Frecciarossa". L’evoluzione dei trasporti ferroviari italiani continuò negli anni '90, con l'implementazione delle prime linee ad alta velocità (HS). In questo periodo, fu avviato anche un processo di liberalizzazione e privatizzazione del settore ferroviario.
    </p>
    <h4>Capitolo 6: Il XXI Secolo e le Sfide Future (2000-presente)</h4>
    <p>
        Oggi, le ferrovie italiane rappresentano uno dei mezzi di trasporto più sostenibili e veloci del paese, con una rete che continua ad espandersi grazie agli investimenti in tecnologia e infrastrutture. L'adozione di treni ad alta velocità ha rivoluzionato il modo di viaggiare e ha incrementato la competitività del trasporto ferroviario rispetto ad altre modalità di spostamento.

        La sfida principale per il futuro consiste nell’integrazione delle ferrovie con i sistemi di trasporto pubblico locale e nella continua espansione della rete, per rispondere alle esigenze di una popolazione in crescita e ai vincoli di sostenibilità ambientale. Le ferrovie italiane, quindi, rappresentano non solo un mollusco della storia economica del paese, ma anche un elemento fondamentale per il suo futuro.
    </p>
</div>

@endsection


@section('titlePage')
    home
@endsection
