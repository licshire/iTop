<?php
// Copyright (C) 2010-2023 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2010-2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Menu:ServiceManagement' => 'Gerenciamento de serviços',
	'Menu:ServiceManagement+' => 'Gerenciamento de serviços',
	'Menu:Service:Overview' => 'Visão geral',
	'Menu:Service:Overview+' => '',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contratos por nível serviço',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Contratos por status',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contratos terminando em menos de 30 dias',

	'Menu:ProviderContract' => 'Contratos de provedores',
	'Menu:ProviderContract+' => '',
	'Menu:CustomerContract' => 'Contratos de clientes',
	'Menu:CustomerContract+' => '',
	'Menu:ServiceSubcategory' => 'Subcategorias de serviços',
	'Menu:ServiceSubcategory+' => '',
	'Menu:Service' => 'Serviços',
	'Menu:Service+' => '',
	'Menu:ServiceElement' => 'Elementos de seviços',
	'Menu:ServiceElement+' => '',
	'Menu:SLA' => 'SLAs',
	'Menu:SLA+' => 'Lista de Acordos de Nível de Serviço (ANSs)',
	'Menu:SLT' => 'SLTs',
	'Menu:SLT+' => 'Lista de Níveis Mínimos de Serviço (NMSs)',
	'Menu:DeliveryModel' => 'Modelos de entrega',
	'Menu:DeliveryModel+' => '',
	'Menu:ServiceFamily' => 'Família de serviços',
	'Menu:ServiceFamily+' => '',
));


/*
	'UI:ServiceManagementMenu' => 'Gestion des Services',
	'UI:ServiceManagementMenu+' => 'Gestion des Services',
	'UI:ServiceManagementMenu:Title' => 'Résumé des services & contrats',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contrats par niveau de service',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Contrats par état',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contrats se terminant dans moins de 30 jours',
*/

//
// Class: Organization
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Organization/Attribute:deliverymodel_id' => 'Modelo de entrega',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => 'Nome do modelo de entrega',
	'Class:Organization/Attribute:deliverymodel_name+' => '',
));



//
// Class: ContractType
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ContractType' => 'Tipo de contrato',
	'Class:ContractType+' => '',
));


//
// Class: Contract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Contract' => 'Contrato',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => 'Nome',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:org_id' => 'Organização',
	'Class:Contract/Attribute:org_id+' => '',
	'Class:Contract/Attribute:organization_name' => 'Nome da organização',
	'Class:Contract/Attribute:organization_name+' => 'Nome comum',
	'Class:Contract/Attribute:contacts_list' => 'Contatos',
	'Class:Contract/Attribute:contacts_list+' => 'Todos os contatos para este contrato de cliente',
	'Class:Contract/Attribute:documents_list' => 'Documentos',
	'Class:Contract/Attribute:documents_list+' => 'Todos os documentos para este contrato de cliente',
	'Class:Contract/Attribute:description' => 'Descrição',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => 'Data de início',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => 'Data final',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => 'Valor',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => 'Moeda',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => 'Dólares',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => 'Euros',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:contracttype_id' => 'Tipo de contrato',
	'Class:Contract/Attribute:contracttype_id+' => '',
	'Class:Contract/Attribute:contracttype_name' => 'Nome do tipo de contrato',
	'Class:Contract/Attribute:contracttype_name+' => '',
	'Class:Contract/Attribute:billing_frequency' => 'Frequência de pagamento',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:cost_unit' => 'Valor unitário',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:provider_id' => 'Provedor',
	'Class:Contract/Attribute:provider_id+' => '',
	'Class:Contract/Attribute:provider_name' => 'Nome do provedor',
	'Class:Contract/Attribute:provider_name+' => '',
	'Class:Contract/Attribute:status' => 'Status',
	'Class:Contract/Attribute:status+' => '',
	'Class:Contract/Attribute:status/Value:implementation' => 'Em negociação',
	'Class:Contract/Attribute:status/Value:implementation+' => '',
	'Class:Contract/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:Contract/Attribute:status/Value:obsolete+' => '',
	'Class:Contract/Attribute:status/Value:production' => 'Aceite',
	'Class:Contract/Attribute:status/Value:production+' => '',
	'Class:Contract/Attribute:finalclass' => 'Tipo de contrato',
	'Class:Contract/Attribute:finalclass+' => '',
));

//
// Class: CustomerContract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:CustomerContract' => 'Contrato de cliente',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:services_list' => 'Serviços',
	'Class:CustomerContract/Attribute:services_list+' => 'Todos os serviços contratados para este contrato',
	'Class:CustomerContract/Attribute:functionalcis_list' => 'ICs',
	'Class:CustomerContract/Attribute:functionalcis_list+' => 'Todos os itens de configuração que são utilizados para a prestação deste contrato',
	'Class:CustomerContract/Attribute:providercontracts_list' => 'Contratos de provedores',
	'Class:CustomerContract/Attribute:providercontracts_list+' => 'Todos os contratos de provedores para suportar este contrato de cliente',
));

//
// Class: ProviderContract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ProviderContract' => 'Contrato de Provedor',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:functionalcis_list' => 'ICs',
	'Class:ProviderContract/Attribute:functionalcis_list+' => 'Todos os itens de configuração abrangidos por esse contrato',
	'Class:ProviderContract/Attribute:sla' => 'SLA',
	'Class:ProviderContract/Attribute:sla+' => 'Acordo de Nível de Serviço (ANS)',
	'Class:ProviderContract/Attribute:coverage' => 'Horário de serviço',
	'Class:ProviderContract/Attribute:coverage+' => 'Horário de cobertura do serviço',
));

//
// Class: lnkContactToContract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkContactToContract' => 'Link Contato / Contrato',
	'Class:lnkContactToContract+' => '',
	'Class:lnkContactToContract/Attribute:contract_id' => 'Contrato',
	'Class:lnkContactToContract/Attribute:contract_id+' => '',
	'Class:lnkContactToContract/Attribute:contract_name' => 'Nome do contrato',
	'Class:lnkContactToContract/Attribute:contract_name+' => '',
	'Class:lnkContactToContract/Attribute:contact_id' => 'Contato',
	'Class:lnkContactToContract/Attribute:contact_id+' => '',
	'Class:lnkContactToContract/Attribute:contact_name' => 'Nome do contato',
	'Class:lnkContactToContract/Attribute:contact_name+' => '',
));

//
// Class: lnkContractToDocument
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkContractToDocument' => 'Link Contrato / Documento',
	'Class:lnkContractToDocument+' => '',
	'Class:lnkContractToDocument/Attribute:contract_id' => 'Contrato',
	'Class:lnkContractToDocument/Attribute:contract_id+' => '',
	'Class:lnkContractToDocument/Attribute:contract_name' => 'Nome do contrato',
	'Class:lnkContractToDocument/Attribute:contract_name+' => '',
	'Class:lnkContractToDocument/Attribute:document_id' => 'Documento',
	'Class:lnkContractToDocument/Attribute:document_id+' => '',
	'Class:lnkContractToDocument/Attribute:document_name' => 'Nome do documento',
	'Class:lnkContractToDocument/Attribute:document_name+' => '',
));

//
// Class: lnkFunctionalCIToProviderContract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkFunctionalCIToProviderContract' => 'Link IC / Contrato de provedor',
	'Class:lnkFunctionalCIToProviderContract+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id' => 'Contrato de provedor',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name' => 'Nome do contrato de provedor',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id' => 'ICs',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name' => 'Nome do IC',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name+' => '',
));

//
// Class: ServiceFamily
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ServiceFamily' => 'Família de serviços',
	'Class:ServiceFamily+' => '',
	'Class:ServiceFamily/Attribute:name' => 'Nome',
	'Class:ServiceFamily/Attribute:name+' => '',
	'Class:ServiceFamily/Attribute:icon' => 'Ícone',
	'Class:ServiceFamily/Attribute:icon+' => '',
	'Class:ServiceFamily/Attribute:services_list' => 'Serviços',
	'Class:ServiceFamily/Attribute:services_list+' => 'Todos os serviços para essa categoria',
));

//
// Class: Service
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Service' => 'Serviço',
	'Class:Service+' => '',
	'Class:Service/Attribute:name' => 'Nome',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:org_id' => 'Organização',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:organization_name' => 'Nome',
	'Class:Service/Attribute:organization_name+' => 'Nome comum',
	'Class:Service/Attribute:description' => 'Descrição',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:servicefamily_id' => 'Família de serviços',
	'Class:Service/Attribute:servicefamily_id+' => '',
	'Class:Service/Attribute:servicefamily_name' => 'Nome da família de serviços',
	'Class:Service/Attribute:servicefamily_name+' => '',
	'Class:Service/Attribute:documents_list' => 'Documentos',
	'Class:Service/Attribute:documents_list+' => 'Todos os documentos associados a este serviço',
	'Class:Service/Attribute:contacts_list' => 'Contatos',
	'Class:Service/Attribute:contacts_list+' => 'Todos os contatos associados a este serviço',
	'Class:Service/Attribute:status' => 'Status',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:implementation' => 'Em homologação',
	'Class:Service/Attribute:status/Value:implementation+' => 'Em homologação',
	'Class:Service/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => 'Em produção',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:icon' => 'Icon',
	'Class:Service/Attribute:icon+' => '',
	'Class:Service/Attribute:customercontracts_list' => 'Contratos de clientes',
	'Class:Service/Attribute:customercontracts_list+' => 'Todos os contratos de clientes que contrataram esse serviço',
	'Class:Service/Attribute:servicesubcategories_list' => 'Subcategorias de serviço',
	'Class:Service/Attribute:servicesubcategories_list+' => 'Todas as subcategorias associadas a esse serviço',
));

//
// Class: lnkDocumentToService
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkDocumentToService' => 'Link Documento / Serviço',
	'Class:lnkDocumentToService+' => '',
	'Class:lnkDocumentToService/Attribute:service_id' => 'Serviço',
	'Class:lnkDocumentToService/Attribute:service_id+' => '',
	'Class:lnkDocumentToService/Attribute:service_name' => 'Nome do serviço',
	'Class:lnkDocumentToService/Attribute:service_name+' => '',
	'Class:lnkDocumentToService/Attribute:document_id' => 'Documento',
	'Class:lnkDocumentToService/Attribute:document_id+' => '',
	'Class:lnkDocumentToService/Attribute:document_name' => 'Nome do documento',
	'Class:lnkDocumentToService/Attribute:document_name+' => '',
));

//
// Class: lnkContactToService
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkContactToService' => 'Link Contato / Serviço',
	'Class:lnkContactToService+' => '',
	'Class:lnkContactToService/Attribute:service_id' => 'Serviço',
	'Class:lnkContactToService/Attribute:service_id+' => '',
	'Class:lnkContactToService/Attribute:service_name' => 'Nome do serviço',
	'Class:lnkContactToService/Attribute:service_name+' => '',
	'Class:lnkContactToService/Attribute:contact_id' => 'Contato',
	'Class:lnkContactToService/Attribute:contact_id+' => '',
	'Class:lnkContactToService/Attribute:contact_name' => 'Nome do contato',
	'Class:lnkContactToService/Attribute:contact_name+' => '',
));

//
// Class: ServiceSubcategory
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ServiceSubcategory' => 'Subcategorias de serviço',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => 'Nome',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => 'Descrição',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => 'Serviço',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => 'Nome do serviço',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:ServiceSubcategory/Attribute:status' => 'Status',
	'Class:ServiceSubcategory/Attribute:status+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => 'Em homologação',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => 'Em produção',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => '',
	'Class:ServiceSubcategory/Attribute:request_type' => 'Tipo de solicitação',
	'Class:ServiceSubcategory/Attribute:request_type+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => 'Incidente',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => 'Solicitação de serviço',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => '',
	'Class:ServiceSubcategory/Attribute:service_provider' => 'Nome do provedor',
	'Class:ServiceSubcategory/Attribute:service_org_id' => 'Provedor',
));

//
// Class: SLA
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:SLA' => 'SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => 'Nome',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:description' => 'Descrição',
	'Class:SLA/Attribute:description+' => '',
	'Class:SLA/Attribute:org_id' => 'Organização',
	'Class:SLA/Attribute:org_id+' => '',
	'Class:SLA/Attribute:organization_name' => 'Nome da organização',
	'Class:SLA/Attribute:organization_name+' => '',
	'Class:SLA/Attribute:slts_list' => 'SLTs',
	'Class:SLA/Attribute:slts_list+' => 'Todos os Níveis Mínimos de Serviço (SLTs) para esse Acordo de Nível de Serviço (SLA)',
	'Class:SLA/Attribute:customercontracts_list' => 'Contratos de clientes',
	'Class:SLA/Attribute:customercontracts_list+' => 'Todos os contratos de clientes utilizando esse Acordo de Nível de Serviço (SLA)',
	'Class:SLA/Error:UniqueLnkCustomerContractToService' => 'Não foi possível salvar o vínculo entre o Contrato do Cliente %1$s e Serviço %2$s : SLA já existe',
));

//
// Class: SLT
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:SLT' => 'SLT',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => 'Nome',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:priority' => 'Prioridade',
	'Class:SLT/Attribute:priority+' => '',
	'Class:SLT/Attribute:priority/Value:1' => 'Crítica',
	'Class:SLT/Attribute:priority/Value:1+' => '',
	'Class:SLT/Attribute:priority/Value:2' => 'Alta',
	'Class:SLT/Attribute:priority/Value:2+' => '',
	'Class:SLT/Attribute:priority/Value:3' => 'Média',
	'Class:SLT/Attribute:priority/Value:3+' => '',
	'Class:SLT/Attribute:priority/Value:4' => 'Baixa',
	'Class:SLT/Attribute:priority/Value:4+' => '',
	'Class:SLT/Attribute:request_type' => 'Tipo de solicitação',
	'Class:SLT/Attribute:request_type+' => '',
	'Class:SLT/Attribute:request_type/Value:incident' => 'Incidente',
	'Class:SLT/Attribute:request_type/Value:incident+' => '',
	'Class:SLT/Attribute:request_type/Value:service_request' => 'Solicitação de serviço',
	'Class:SLT/Attribute:request_type/Value:service_request+' => '',
	'Class:SLT/Attribute:metric' => 'Métrica',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:tto' => 'TTO',
	'Class:SLT/Attribute:metric/Value:tto+' => 'Time To Own (TTO)',
	'Class:SLT/Attribute:metric/Value:ttr' => 'TTR',
	'Class:SLT/Attribute:metric/Value:ttr+' => 'Time To Resolve (TTR)',
	'Class:SLT/Attribute:value' => 'Valor',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:unit' => 'Unidade',
	'Class:SLT/Attribute:unit+' => '',
	'Class:SLT/Attribute:unit/Value:hours' => 'Horas',
	'Class:SLT/Attribute:unit/Value:hours+' => '',
	'Class:SLT/Attribute:unit/Value:minutes' => 'Minutos',
	'Class:SLT/Attribute:unit/Value:minutes+' => '',
));

//
// Class: lnkSLAToSLT
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkSLAToSLT' => 'Link SLA / SLT',
	'Class:lnkSLAToSLT+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_id' => 'SLA',
	'Class:lnkSLAToSLT/Attribute:sla_id+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_name' => 'Nome do SLA',
	'Class:lnkSLAToSLT/Attribute:sla_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_id' => 'SLT',
	'Class:lnkSLAToSLT/Attribute:slt_id+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_name' => 'Nome do SLT',
	'Class:lnkSLAToSLT/Attribute:slt_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_metric' => 'Métrica do SLT',
	'Class:lnkSLAToSLT/Attribute:slt_metric+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_request_type' => 'Tipo de SLT da solicitação',
	'Class:lnkSLAToSLT/Attribute:slt_request_type+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_ticket_priority' => 'Prioridade do SLT da solicitação',
	'Class:lnkSLAToSLT/Attribute:slt_ticket_priority+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_value' => 'Valor do SLT',
	'Class:lnkSLAToSLT/Attribute:slt_value+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_value_unit' => 'Unidade de valor do SLT',
	'Class:lnkSLAToSLT/Attribute:slt_value_unit+' => '',
));

//
// Class: lnkCustomerContractToService
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkCustomerContractToService' => 'Link Contrato de cliente / Serviço',
	'Class:lnkCustomerContractToService+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => 'Contrato de cliente',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => 'Nome do contrato de cliente',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_id' => 'Serviço',
	'Class:lnkCustomerContractToService/Attribute:service_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_name' => 'Nome do serviço',
	'Class:lnkCustomerContractToService/Attribute:service_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => 'SLA',
	'Class:lnkCustomerContractToService/Attribute:sla_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => 'Nome do SLA',
	'Class:lnkCustomerContractToService/Attribute:sla_name+' => '',
));

//
// Class: lnkCustomerContractToProviderContract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkCustomerContractToProviderContract' => 'Link Contrato de cliente / Contrato de provedor',
	'Class:lnkCustomerContractToProviderContract+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_id' => 'Contrato de cliente',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_name' => 'Nome do contrato de cliente',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_id' => 'Contrato de provedor',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_name' => 'Nome do contrato de provedor',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_name+' => '',
));

//
// Class: lnkCustomerContractToFunctionalCI
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkCustomerContractToFunctionalCI' => 'Link Contrato de cliente / IC',
	'Class:lnkCustomerContractToFunctionalCI+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_id' => 'Contrato de cliente',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_name' => 'Nome do contrato de cliente',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_id' => 'ICs',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_name' => 'Nome do CI',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_name+' => '',
));

//
// Class: DeliveryModel
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:DeliveryModel' => 'Modelo de entrega',
	'Class:DeliveryModel+' => '',
	'Class:DeliveryModel/Attribute:name' => 'Nome',
	'Class:DeliveryModel/Attribute:name+' => '',
	'Class:DeliveryModel/Attribute:org_id' => 'Organização',
	'Class:DeliveryModel/Attribute:org_id+' => '',
	'Class:DeliveryModel/Attribute:organization_name' => 'Nome da organização',
	'Class:DeliveryModel/Attribute:organization_name+' => '',
	'Class:DeliveryModel/Attribute:description' => 'Descrição',
	'Class:DeliveryModel/Attribute:description+' => '',
	'Class:DeliveryModel/Attribute:contacts_list' => 'Contatos',
	'Class:DeliveryModel/Attribute:contacts_list+' => 'Todos os contatos (Equipe e Pessoa) para esse Modelo de entrega',
	'Class:DeliveryModel/Attribute:customers_list' => 'Clientes',
	'Class:DeliveryModel/Attribute:customers_list+' => 'Todos os clientes com esse Modelo de entrega',
));

//
// Class: lnkDeliveryModelToContact
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkDeliveryModelToContact' => 'Link Modelo de entrega / Contato',
	'Class:lnkDeliveryModelToContact+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => 'Modelo de entrega',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => 'Nome do Modelo de entrega',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => 'Contato',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => 'Nome do contato',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => 'Função',
	'Class:lnkDeliveryModelToContact/Attribute:role_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => 'Nome da função',
	'Class:lnkDeliveryModelToContact/Attribute:role_name+' => '',
));
