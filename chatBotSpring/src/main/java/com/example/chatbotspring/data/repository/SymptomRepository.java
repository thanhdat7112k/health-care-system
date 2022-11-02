package com.example.chatbotspring.data.repository;

import com.example.chatbotspring.data.entities.Symptom;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import java.util.List;

public interface SymptomRepository extends JpaRepository<Symptom, Long> {

    @Query(value = "select h from Symptom h where h.symptomName like %?1%")
    List<Symptom> findBySymptomName(String symptom);


}
