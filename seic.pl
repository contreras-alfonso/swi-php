:-dynamic tiene/1.
lista([]):-enfermedad(E),write(E).
lista([H|T]):-assert(tiene(H)),lista(T).
test(X) :-limpiar,lista(X).% write( 'probando.. ' ),write(X).

enfermedad('TOS DE LAS PERRERAS'):-
	tiene(anorexia),	tiene(decaimiento),
	tiene(pirexia),		tiene(expectoracion),
	tiene(tos),			tiene(neumonia).

enfermedad('MOQUILLO CANINO'):-
	tiene(tos),				tiene(estornudos),
	tiene(rinorrea),		tiene(neumonia),
	tiene(conjuntivitis),	tiene(pustulas),
	tiene(hiperqueratosis),	tiene(hipoplasia),
	tiene(vomitos),			tiene(diarrea),
	tiene(hiperestesia),	tiene(convulsiones),
	tiene(ataxia),			tiene(paresias),
	tiene(mioclonias).

enfermedad('PARVOVIRUS CANINO'):-
	tiene(depresion),		tiene(anorexia),
	tiene(deshidratacion),	tiene(shock),
	tiene(vomitos),			tiene(diarrea).

enfermedad('LEPTOSPIROSIS AGUDA'):-
	tiene(anorexia),	tiene(deshidratacion),
	tiene(pirexia),		tiene(polidipsia),
	tiene(mucosas),		tiene(taquicardia),
	tiene(epistaxis),	tiene(purpura),
	tiene(vomitos),		tiene(hematemesis),
	tiene(melenas),		tiene(hematoquecia),
	tiene(hiperestesia).

enfermedad('LEPTOSPIROSIS SUBAGUDA'):-
	tiene(anorexia),		tiene(deshidratacion),
	tiene(pirexia),			tiene(tos),
	tiene(rinitis),			tiene(disnea),
	tiene(conjuntivitis),	tiene(congestion),
	tiene(vomitos).

enfermedad('BRUCELOSIS CANINA'):-
	tiene(infertilidad),	tiene(linfadenopatia),
	tiene(claudicaciones),	tiene(uveitis),
	tiene(esplenomegalia),	tiene(ataxia),
	tiene(paresias).

enfermedad(_):-fail.
limpiar:-retract(tiene(_)),fail.
limpiar.
