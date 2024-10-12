<?php

namespace App\Http\Controllers;

use App\Models\Relatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    // 1. Exibir todos os relatórios (Read)
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        // Passo 1: Carregar todos os relatórios em ordem crescente de tempo
        $relatoriosCompletos = Relatorio::orderByRaw("TIME_TO_SEC(STR_TO_DATE(tempo, '%i:%s')) ASC")->get();
    
        // Passo 2: Atribuir a posição (ranking) para cada relatório
        foreach ($relatoriosCompletos as $index => $relatorio) {
            $relatorio->posicao = $index + 1; // Atribui a posição correta
        }
    
        // Passo 3: Filtrar os relatórios baseados na pesquisa
        if ($search) {
            $relatorios = $relatoriosCompletos->filter(function ($relatorio) use ($search) {
                return stripos($relatorio->nome, $search) !== false || stripos($relatorio->tempo, $search) !== false;
            });
        } else {
            $relatorios = $relatoriosCompletos;
        }
    
        // Passo 4: Retornar a view com os relatórios (filtrados ou não) e suas respectivas posições
        return view('Ranking-Online', compact('relatorios'));
    }

    // 2. Exibir formulário para criar novo relatório (Create)
    public function create()
    {
        return view('relatorios.create');
    }

    // 3. Armazenar novo relatório no banco de dados (Store)
    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            'nome' => 'required|string',
            'tempo' => 'required|string',
        ]);

        // Insere no banco principal
        $relatorio = Relatorio::create($request->all());

        // Insere no segundo banco
        DB::connection('second_db')->table('relatorio')->insert([
            'nome' => $relatorio->nome,
            'tempo' => $relatorio->tempo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('relatorios.index')->with('success', 'Relatório criado com sucesso!');
    }

    // 4. Exibir um único relatório (Read)
    public function show(Relatorio $relatorio)
    {
        return view('relatorios.show', compact('relatorio'));
    }

    // 5. Exibir formulário para editar relatório existente (Edit)
    public function edit(Relatorio $relatorio)
    {
        return view('relatorios.edit', compact('relatorio'));
    }

    // 6. Atualizar relatório existente no banco de dados (Update)
    public function update(Request $request, Relatorio $relatorio)
    {
        // Validação dos dados de entrada
        $request->validate([
            'nome' => 'required|string',
            'tempo' => 'required|string',
        ]);

        // Atualiza o banco principal
        $relatorio->update($request->all());

        // Atualiza o banco secundário
        DB::connection('second_db')->table('relatorio')
            ->where('id', $relatorio->id)
            ->update([
                'nome' => $relatorio->nome,
                'tempo' => $relatorio->tempo,
                'updated_at' => now(),
            ]);

        return redirect()->route('relatorios.index')->with('success', 'Relatório atualizado com sucesso!');
    }

    // 7. Excluir relatório do banco de dados (Delete)
    public function destroy(Relatorio $relatorio)
    {
        // Deleta no banco principal
        $relatorio->delete();

        // Deleta no banco secundário
        DB::connection('second_db')->table('relatorio')->where('id', $relatorio->id)->delete();

        return redirect()->route('relatorios.index')->with('success', 'Relatório excluído com sucesso!');
    }
}
