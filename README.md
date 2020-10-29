# Dependencias

Dependências dos sistemas internos.

Dentre eles, páginas web comuns a todos os sistemas e personalizações de css e js.

Criando branch de dev outra vez

## Instalação 

Você pode instalar esse pacote via Composer, por meio do Satis.  

Adicione o satis no seu arquivo composer.json:

```json
"repositories": [
  {
    "type": "composer",
    "url": "https://ti.gitlab.ladetec.iq.ufrj.br/satis",
    "options": {
      "ssl": {
        "allow_self_signed": true
      },
      "ssh2": {
        "pubkey_file": "/caminho/para/sua/chave/publica/do/gitlab",
        "privkey_file": "/caminho/para/sua/chave/publica/do/gitlab"
      }
    } 
  }
]
```
