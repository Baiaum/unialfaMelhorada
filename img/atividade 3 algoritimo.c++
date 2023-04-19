#include <iostream>
#include <vector>
#include <string>

using namespace std;

int main() {
    
    vector<string> convidados;

    convidados.push_back("Ana");
    convidados.push_back("Bruno");
    convidados.push_back("Carla");
    convidados.push_back("Daniel");

    cout << "Lista de convidados:\n";
    for (int i = 0; i < convidados.size(); i++) {
        cout << i + 1 << ". " << convidados[i] << endl;
    }

    string nome_a_excluir = "Carla";
    for (int i = 0; i < convidados.size(); i++) {
        if (convidados[i] == nome_a_excluir) {
            convidados.erase(convidados.begin() + i);
            break;
        }
    }

    cout << "\nLista de convidados atualizada:\n";
    for (int i = 0; i < convidados.size(); i++) {
        cout << i + 1 << ". " << convidados[i] << endl;
    }

    return 0;
}