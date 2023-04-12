<?php

namespace Database\Seeders;

use App\Models\AtosTipo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AtosTipoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $atosTipos = [
            "Leis",
            "Leis Complementares",
            "Decretos",
            "Portarias",
            ["Conselho Municipal dos Direitos da Criança e do Adolescente", "CMDCA"],
            ["Conselho Municipal da Pessoa com Deficiência", "CONDEFI"],
            ["Conselho Municipal da Saúde", "CMS"],
            ["Conselho Municipal do Turismo", "COMTUR"],
            ["Conselho Municipal de Educação Conselho Municipal de Alimentação Escolar", "CAE"],
            ["Conselho Municipal de Acompanhamento e Controle Social do FUNDEB", "CACS FUNDEB"],
            ["Conselho Municipal do Idoso Conselho Municipal de Assistência Social", "CAS"],
            "Conselho Municipal de Desenvolvimento Rural de Pedro de Toledo",
            ["Conselho Municipal de Política Cultural", "CMPC"],
            "Conselho Deliberativo do Fundo Social de Solidariedade",
            ["Conselho Municipal de Políticas sobre Drogas", "COMAD"],
            ["Conselho Municipal de Segurança", "CONSEG"]
        ];

        foreach ($atosTipos as $tipo) {

            if(is_array($tipo)){
                AtosTipo::updateOrCreate(
                    ["descricao" => $tipo[0], "slug" => Str::slug($tipo[0]), "code" => $tipo[1]],
                    [
                        "descricao" => $tipo[0], "slug" => Str::slug($tipo[0]), "code" => $tipo[1]
                    ]
                );
                continue;
            }else{
                AtosTipo::updateOrCreate(
                    ["descricao" => $tipo],
                    ["slug" => Str::slug($tipo)]
                );
            }




        }

    }
}
